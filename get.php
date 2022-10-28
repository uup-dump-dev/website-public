<?php
/*
Copyright 2019 whatever127

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

function sortBySize($a, $b) {
    global $files;

    if ($files[$a]['size'] == $files[$b]['size']) {
        return 0;
    }

    return ($files[$a]['size'] < $files[$b]['size']) ? -1 : 1;
}

//Create aria2 download package with conversion script
function createUupConvertPackage(
    $url,
    $archiveName,
    $virtualEditions = 0,
    $desiredVE = array('Enterprise'),
    $moreOptions = [],
    $app = null
) {
    $updates = isset($moreOptions['updates']) ? $moreOptions['updates'] : 0;
    $cleanup = isset($moreOptions['cleanup']) ? $moreOptions['cleanup'] : 0;
    $netfx = isset($moreOptions['netfx']) ? $moreOptions['netfx'] : 0;
    $esd = isset($moreOptions['esd']) ? $moreOptions['esd'] : 0;

    $type = $esd ? 'esd' : 'wim';

    $currDir = dirname(__FILE__).'/..';
    $time = gmdate("Y-m-d H:i:s T", time());

    $downloadapp = "";
    if(!empty($app)) {
        $downloadapp = <<<TEXT

:DOWNLOAD_APPS
echo Retrieving aria2 script for Apps...
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -o"%aria2Script%" --allow-overwrite=true --auto-file-renaming=false "$app"
if %ERRORLEVEL% GTR 0 call :DOWNLOAD_ERROR & exit /b 1

for /F "tokens=2 delims=:" %%i in ('findstr #UUPDUMP_ERROR: "%aria2Script%"') do set DETECTED_ERROR=%%i
if NOT [%DETECTED_ERROR%] == [] (
    echo Unable to retrieve data from Windows Update servers. Reason: %DETECTED_ERROR%
    echo If this problem persists, most likely the set you are attempting to download was removed from Windows Update servers.
    echo.
    pause
    goto :EOF
)

echo Attempting to download Apps files...
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j25 -c -R -d"%destDir%" -i"%aria2Script%"
if %ERRORLEVEL% GTR 0 goto :DOWNLOAD_APPS

TEXT;
    }

    $cmdScript = <<<SCRIPT
@echo off
rem Generated on $time

:: Proxy configuration
:: If you need to configure a proxy to be able to connect to the internet,
:: then you can do this by configuring the all_proxy environment variable.
:: By default this variable is commented out, configuring aria2c to use 
:: the proxy settings specified by the system.
::
:: Usage: set "all_proxy=proxy_address"
:: For example: set "all_proxy=127.0.0.1:8888"
::
:: More information how to use this can be found at:
:: https://aria2.github.io/manual/en/html/aria2c.html#cmdoption-all-proxy
:: https://aria2.github.io/manual/en/html/aria2c.html#environment

:: Uncomment the following line to override the proxy settings specified
:: by the system.
::
:: set "all_proxy="

:: End of proxy configuration

cd /d "%~dp0"
if NOT "%cd%"=="%cd: =%" (
    echo Current directory contains spaces in its path.
    echo Please move or rename the directory to one not containing spaces.
    echo.
    pause
    goto :EOF
)

if "[%1]" == "[49127c4b-02dc-482e-ac4f-ec4d659b7547]" goto :START_PROCESS
REG QUERY HKU\S-1-5-19\Environment >NUL 2>&1 && goto :START_PROCESS

set command="""%~f0""" 49127c4b-02dc-482e-ac4f-ec4d659b7547
SETLOCAL ENABLEDELAYEDEXPANSION
set "command=!command:'=''!"

powershell -NoProfile Start-Process -FilePath '%COMSPEC%' ^
-ArgumentList '/c """!command!"""' -Verb RunAs 2>NUL

IF %ERRORLEVEL% GTR 0 (
    echo =====================================================
    echo This script needs to be executed as an administrator.
    echo =====================================================
    echo.
    pause
)

SETLOCAL DISABLEDELAYEDEXPANSION
goto :EOF

:START_PROCESS
set "aria2=files\\aria2c.exe"
set "a7z=files\\7zr.exe"
set "uupConv=files\\uup-converter-wimlib.7z"
set "aria2Script=files\\aria2_script.%random%.txt"
set "destDir=UUPs"

powershell -NoProfile -ExecutionPolicy Unrestricted .\\files\\depends_win.ps1 || (pause & exit /b 1)
echo.

if NOT EXIST ConvertConfig.ini goto :NO_FILE_ERROR
if NOT EXIST %a7z% goto :NO_FILE_ERROR
if NOT EXIST %uupConv% goto :NO_FILE_ERROR

echo Extracting UUP converter...
"%a7z%" -x!ConvertConfig.ini -y x "%uupConv%" >NUL
echo.
$downloadapp
:DOWNLOAD_UUPS
echo Retrieving aria2 script...
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -o"%aria2Script%" --allow-overwrite=true --auto-file-renaming=false "$url"
if %ERRORLEVEL% GTR 0 call :DOWNLOAD_ERROR & exit /b 1
echo.

for /F "tokens=2 delims=:" %%i in ('findstr #UUPDUMP_ERROR: "%aria2Script%"') do set DETECTED_ERROR=%%i
if NOT [%DETECTED_ERROR%] == [] (
    echo Unable to retrieve data from Windows Update servers. Reason: %DETECTED_ERROR%
    echo If this problem persists, most likely the set you are attempting to download was removed from Windows Update servers.
    echo.
    pause
    goto :EOF
)

echo Attempting to download files...
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j5 -c -R -d"%destDir%" -i"%aria2Script%"
if %ERRORLEVEL% GTR 0 goto :DOWNLOAD_UUPS & exit /b 1

if EXIST convert-UUP.cmd goto :START_CONVERT
pause
goto :EOF

:START_CONVERT
call convert-UUP.cmd
goto :EOF

:NO_FILE_ERROR
echo We couldn't find one of needed files for this script.
pause
goto :EOF

:DOWNLOAD_ERROR
echo.
echo We have encountered an error while downloading files.
pause
goto :EOF

:EOF

SCRIPT;

$shellScript = <<<SCRIPT
#!/bin/bash
#Generated on $time

# Proxy configuration
# If you need to configure a proxy to be able to connect to the internet,
# then you can do this by configuring the all_proxy environment variable.
# By default this variable is empty, configuring aria2c to not use any proxy.
#
# Usage: export all_proxy="proxy_address"
# For example: export all_proxy="127.0.0.1:8888"
#
# More information how to use this can be found at:
# https://aria2.github.io/manual/en/html/aria2c.html#cmdoption-all-proxy
# https://aria2.github.io/manual/en/html/aria2c.html#environment

export all_proxy=""

# End of proxy configuration

for prog in aria2c cabextract wimlib-imagex chntpw; do
  which \$prog &>/dev/null 2>&1 && continue;

  echo "\$prog does not seem to be installed"
  echo "Check the readme.unix.md for details"
  exit 1
done

mkiso_present=0
which genisoimage &>/dev/null && mkiso_present=1
which mkisofs &>/dev/null && mkiso_present=1

if [ \$mkiso_present -eq 0 ]; then
  echo "genisoimage nor mkisofs does seem to be installed"
  echo "Check the readme.unix.md for details"
  exit 1
fi

destDir="UUPs"
tempScript="aria2_script.\$RANDOM.txt"

echo "Downloading converters..."
aria2c --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j5 --allow-overwrite=true --auto-file-renaming=false -d"files" -i"files/converter_multi"
if [ $? != 0 ]; then
  echo "We have encountered an error while downloading files."
  exit 1
fi

echo ""
echo "Retrieving aria2 script..."
aria2c --no-conf --log-level=info --log="aria2_download.log" -o"\$tempScript" --allow-overwrite=true --auto-file-renaming=false "$url"
if [ $? != 0 ]; then
  echo "Failed to retrieve aria2 script"
  exit 1
fi

detectedError=`grep '#UUPDUMP_ERROR:' "\$tempScript" | sed 's/#UUPDUMP_ERROR://g'`
if [ ! -z \$detectedError ]; then
    echo "Unable to retrieve data from Windows Update servers. Reason: \$detectedError"
    echo "If this problem persists, most likely the set you are attempting to download was removed from Windows Update servers."
    exit 1
fi

echo ""
echo "Attempting to download files..."
aria2c --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j5 -c -R -d"\$destDir" -i"\$tempScript"
if [ $? != 0 ]; then
  echo "We have encountered an error while downloading files."
  exit 1
fi

echo ""
if [ -e ./files/convert.sh ]; then
  chmod +x ./files/convert.sh
  ./files/convert.sh $type "\$destDir" $virtualEditions
fi

SCRIPT;

$desiredVirtualEditions = '';
$desiredVirtualEditionsLinux = '';
$index = 0;
foreach($desiredVE as $edition) {
    if($index > 0) {
        $desiredVirtualEditions .= ',';
        $desiredVirtualEditionsLinux .= ' ';
    }
    $desiredVirtualEditions .= $edition;
    $desiredVirtualEditionsLinux .= $edition;

    $index++;
}

    $convertConfig = <<<CONFIG
[convert-UUP]
AutoStart    =1
AddUpdates   =$updates
Cleanup      =$cleanup
ResetBase    =0
NetFx3       =$netfx
StartVirtual =$virtualEditions
wim2esd      =$esd
wim2swm      =0
SkipISO      =0
SkipWinRE    =0
LCUwinre     =0
UpdtBootFiles=0
ForceDism    =0
RefESD       =0
SkipEdge     =0
AutoExit     =0

[Store_Apps]
SkipApps     =0
AppsLevel    =0
CustomList   =0

[create_virtual_editions]
vAutoStart   =1
vDeleteSource=0
vPreserve    =0
vwim2esd     =$esd
vwim2swm     =0
vSkipISO     =0
vAutoEditions=$desiredVirtualEditions

CONFIG;

$convertConfigLinux = <<<CONFIG
VIRTUAL_EDITIONS_LIST='$desiredVirtualEditionsLinux'

CONFIG;

    $cmdScript = str_replace(["\r\n", "\r"], "\n", $cmdScript);
    $convertConfig = str_replace(["\r\n", "\r"], "\n", $convertConfig);
    $shellScript = str_replace(["\r\n", "\r"], "\n", $shellScript);
    $convertConfigLinux = str_replace(["\r\n", "\r"], "\n", $convertConfigLinux);

    $cmdScript = str_replace("\n", "\r\n", $cmdScript);
    $convertConfig = str_replace("\n", "\r\n", $convertConfig);

    $zip = new ZipArchive;
    $archive = @tempnam($currDir.'/tmp', 'zip');
    $open = $zip->open($archive, ZipArchive::CREATE+ZipArchive::OVERWRITE);

    if($open !== TRUE) {
        echo 'Failed to create archive.';
        die();
    }

    $zip->addFromString('uup_download_windows.cmd', $cmdScript);
    $zip->addFromString('uup_download_linux.sh', $shellScript);
    $zip->addFromString('uup_download_macos.sh', $shellScript);
    $zip->addFromString('ConvertConfig.ini', $convertConfig);
    $zip->addFromString('files/convert_config_linux', $convertConfigLinux);
    $zip->addFromString('files/convert_config_macos', $convertConfigLinux);
    $zip->addFile($currDir.'/public/autodl_files/readme.unix.md', 'readme.unix.md');
    $zip->addFile($currDir.'/public/autodl_files/converter_multi', 'files/converter_multi');
    $zip->addFile($currDir.'/public/autodl_files/depends_win.ps1', 'files/depends_win.ps1');
    $zip->close();

    if($virtualEditions) {
        $suffix = '_virtual';
    } else {
        $suffix = '';
    }

    header('Content-Type: archive/zip');
    header('Content-Disposition: attachment; filename="'.$archiveName."_convert$suffix.zip\"");
    header('Content-Length: '.filesize($archive));

    $content = file_get_contents($archive);
    unlink($archive);

    echo $content;
}

//Create aria2 download package only
function createAria2Package($url, $archiveName, $app = null) {
    $currDir = dirname(__FILE__).'/..';
    $time = gmdate("Y-m-d H:i:s T", time());

    $ariacmd = <<<TEXT
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j5 -c -R -d"%destDir%" -i"%aria2Script%"
TEXT;

    $ariabash = <<<TEXT
aria2c --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j5 -c -R -d"\$destDir" -i"\$tempScript"
TEXT;

    if(strpos($archiveName, "_app")) {
        $ariacmd = <<<TEXT
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j25 -c -R -d"%destDir%" -i"%aria2Script%"
TEXT;

        $ariabash = <<<TEXT
aria2c --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j25 -c -R -d"\$destDir" -i"\$tempScript"
TEXT;
    }

    $downloadapp = "";
    if(!empty($app)) {
        $downloadapp = <<<TEXT

:DOWNLOAD_APPS
echo Retrieving aria2 script for Apps...
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -o"%aria2Script%" --allow-overwrite=true --auto-file-renaming=false "$app"
if %ERRORLEVEL% GTR 0 call :DOWNLOAD_ERROR & exit /b 1

for /F "tokens=2 delims=:" %%i in ('findstr #UUPDUMP_ERROR: "%aria2Script%"') do set DETECTED_ERROR=%%i
if NOT [%DETECTED_ERROR%] == [] (
    echo Unable to retrieve data from Windows Update servers. Reason: %DETECTED_ERROR%
    echo If this problem persists, most likely the set you are attempting to download was removed from Windows Update servers.
    echo.
    pause
    goto :EOF
)

echo Attempting to download Apps files...
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -x16 -s16 -j25 -c -R -d"%destDir%" -i"%aria2Script%"
if %ERRORLEVEL% GTR 0 goto :DOWNLOAD_APPS

TEXT;
    }

    $cmdScript = <<<SCRIPT
@echo off
rem Generated on $time

:: Proxy configuration
:: If you need to configure a proxy to be able to connect to the internet,
:: then you can do this by configuring the all_proxy environment variable.
:: By default this variable is empty, configuring aria2c to not use any proxy.
::
:: Usage: set "all_proxy=proxy_address"
:: For example: set "all_proxy=127.0.0.1:8888"
::
:: More information how to use this can be found at:
:: https://aria2.github.io/manual/en/html/aria2c.html#cmdoption-all-proxy
:: https://aria2.github.io/manual/en/html/aria2c.html#environment

set "all_proxy="

:: End of proxy configuration

set "aria2=files\\aria2c.exe"
set "aria2Script=files\\aria2_script.%random%.txt"
set "destDir=UUPs"

cd /d "%~dp0"
powershell -NoProfile -ExecutionPolicy Unrestricted .\\files\\depends_win.ps1 -ForDownload || (pause & exit /b 1)
echo.
$downloadapp
:DOWNLOAD_UUPS
echo Retrieving aria2 script...
"%aria2%" --no-conf --log-level=info --log="aria2_download.log" -o"%aria2Script%" --allow-overwrite=true --auto-file-renaming=false "$url"
if %ERRORLEVEL% GTR 0 call :DOWNLOAD_ERROR & exit /b 1

for /F "tokens=2 delims=:" %%i in ('findstr #UUPDUMP_ERROR: "%aria2Script%"') do set DETECTED_ERROR=%%i
if NOT [%DETECTED_ERROR%] == [] (
    echo Unable to retrieve data from Windows Update servers. Reason: %DETECTED_ERROR%
    echo If this problem persists, most likely the set you are attempting to download was removed from Windows Update servers.
    echo.
    pause
    goto :EOF
)

echo Attempting to download files...
$ariacmd
if %ERRORLEVEL% GTR 0 goto :DOWNLOAD_UUPS & exit /b 1

pause
goto EOF

:DOWNLOAD_ERROR
echo.
echo We have encountered an error while downloading files.
pause
goto EOF

:EOF

SCRIPT;

    $shellScript = <<<SCRIPT
#!/bin/bash
#Generated on $time

# Proxy configuration
# If you need to configure a proxy to be able to connect to the internet,
# then you can do this by configuring the all_proxy environment variable.
# By default this variable is empty, configuring aria2c to not use any proxy.
#
# Usage: export all_proxy="proxy_address"
# For example: export all_proxy="127.0.0.1:8888"
#
# More information how to use this can be found at:
# https://aria2.github.io/manual/en/html/aria2c.html#cmdoption-all-proxy
# https://aria2.github.io/manual/en/html/aria2c.html#environment

export all_proxy=""

# End of proxy configuration

which aria2c &>/dev/null || {
  echo "aria2c does not seem to be installed"
  echo "Check the readme.unix.md for details"
  exit 1
}

destDir="UUPs"
tempScript="aria2_script.\$RANDOM.txt"

echo "Retrieving aria2 script..."
aria2c --no-conf --log-level=info --log="aria2_download.log" -o"\$tempScript" --allow-overwrite=true --auto-file-renaming=false "$url"
if [ $? != 0 ]; then
  echo "Failed to retrieve aria2 script"
  exit 1
fi

detectedError=`grep '#UUPDUMP_ERROR:' "\$tempScript" | sed 's/#UUPDUMP_ERROR://g'`
if [ ! -z \$detectedError ]; then
    echo "Unable to retrieve data from Windows Update servers. Reason: \$detectedError"
    echo "If this problem persists, most likely the set you are attempting to download was removed from Windows Update servers."
    exit 1
fi

echo ""
echo "Attempting to download files..."
$ariabash
if [ $? != 0 ]; then
  echo "We have encountered an error while downloading files."
  exit 1
fi

SCRIPT;

    $cmdScript = str_replace(["\r\n", "\r"], "\n", $cmdScript);
    $shellScript = str_replace(["\r\n", "\r"], "\n", $shellScript);
    $cmdScript = str_replace("\n", "\r\n", $cmdScript);

    $zip = new ZipArchive;
    $archive = @tempnam($currDir.'/tmp', 'zip');
    $open = $zip->open($archive, ZipArchive::CREATE+ZipArchive::OVERWRITE);

    if($open === TRUE) {
        $zip->addFromString('uup_download_windows.cmd', $cmdScript);
        $zip->addFromString('uup_download_linux.sh', $shellScript);
        $zip->addFromString('uup_download_macos.sh', $shellScript);
        $zip->addFile($currDir.'/public/autodl_files/readme.unix.md', 'readme.unix.md');
        $zip->addFile($currDir.'/public/autodl_files/depends_win.ps1', 'files/depends_win.ps1');
        $zip->close();
    } else {
        echo 'Failed to create archive.';
        die();
    }

    header('Content-Type: archive/zip');
    header('Content-Disposition: attachment; filename="'.$archiveName.'.zip"');
    header('Content-Length: '.filesize($archive));

    $content = file_get_contents($archive);
    unlink($archive);

    echo $content;
}
