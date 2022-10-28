<?php
/*
UUP dump translation file.

Translation information:
English language name: English (United States)
Localized language name: English (United States)
Language code: en-US
Authors: whatever127, mspaintmsi, awuctl, eraseyourknees
*/

//Language information
$s['code'] = 'en-US';
$s['timeZone'] = 'UTC'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'Build';
$s['arch'] = 'Architecture';
$s['ring'] = 'Channel';
$s['updateid'] = 'Update ID';
$s['update'] = 'Update';
$s['lang'] = 'Language';
$s['edition'] = 'Edition';
$s['seachForBuilds'] = 'Search for builds...';
$s['no'] = 'No';
$s['yes'] = 'Yes';
$s['yesRecommended'] = 'Yes (recommended)';
$s['next'] = 'Next';
$s['ok'] = 'OK';
$s['cancel'] = 'Cancel';
$s['information'] = 'Information';
$s['totalDlSize'] = 'Total download size';
$s['file'] = 'File';
$s['expires'] = 'Expires';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Size';
$s['additionalEdition'] = 'Additional edition';
$s['requiredEdition'] = 'Required edition';
$s['unknown'] = 'Unknown';

//global
$s['home'] = 'Home';
$s['downloads'] = 'Downloads';
$s['lightMode'] = 'Light mode';
$s['faq'] = 'FAQ';
$s['darkMode'] = 'Dark mode';
$s['sourceCode'] = 'Source code';
$s['menu'] = 'Menu';
$s['websiteDesc'] = 'Download UUP files from Windows Update servers with ease. This project is not affiliated with Microsoft Corporation.';
$s['notAffiliated'] = 'This project is not affiliated with Microsoft Corporation. Windows is a registered trademark of Microsoft Corporation.';
$s['copyright'] = '© %d %s and contributors.'; //© 2019 whatever127 and contributors.
$s['copyrightNew'] = '© %d UUP dump authors and contributors.';
$s['selectLanguage'] = 'Please select your language';
$s['uupDumpDesc'] = 'UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.';
$s['uupDumpDescSub'] = '%s on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.

//index.php
$s['slogan'] = 'Download UUP files from Windows Update servers with ease.';
$s['quickOptions'] = 'Quick options';
$s['tHeadReleaseType'] = 'Release type';
$s['tHeadDescription'] = 'Description';
$s['tHeadArchitectures'] = 'Architectures';
$s['latestPublicRelease'] = 'Latest Public Release build';
$s['latestPublicReleaseSub'] = 'Latest updated build for regular users.';
$s['latestDevRelease'] = 'Latest Dev Channel build';
$s['latestDevReleaseSub'] = 'Somewhat unreliable builds with the latest features.<br>Ideal for highly technical users.';
$s['latestBetaRelease'] = 'Latest Beta Channel build';
$s['latestBetaReleaseSub'] = 'Reliable builds with most upcoming features available.<br>Ideal for early adopters.';
$s['latestRPRelease'] = 'Latest Release Preview build';
$s['latestRPReleaseSub'] = 'Reliable builds for previewing the next release.<br>Ideal for trying out upcoming releases.';
$s['advOptions'] = 'Advanced options';
$s['browseBuilds'] = 'Browse known builds';
$s['browseBuildsSub'] = 'Choose an already discovered build and download it.';
$s['fetchLatest'] = 'Fetch the latest build';
$s['fetchLatestSub'] = 'Retrieve the latest build information from Windows Update servers.';
$s['newlyAdded'] = 'Recently added builds';
$s['dateAdded'] = 'Date added';

//newbuild.php
$s['newBuild'] = 'New build';
$s['addNewBuild'] = 'Add a new build';
$s['selectOptions'] = 'Select options';
$s['newBuildNextText'] = 'Click the <i>Next</i> button to start searching with the specified options.';
$s['newBuildUsing'] = 'Using this page';
$s['newBuildUsingText'] = 'This page is meant to be used by advanced users, who would like to add a build not found on the website. In case you want to use one of the most commonly used parameters, please use one of the <i>Quick options</i> found on the home page.';
$s['optionsNotice'] = 'Options notice';
$s['optionsNoticeText'] = 'Options found here configure how the underlying Windows Update client reports itself to the Microsoft servers. It is crucial to set these properly, otherwise you will receive an error.';

//known.php
$s['browseKnown'] = 'Browse known builds';
$s['chooseBuild'] = 'Choose build';
$s['weFoundBuilds'] = '<b>%d</b> builds were found for your query.'; //<b>692</b> builds were found for your query.
$s['sortByDate'] = 'Sort results by addition date';
$s['nextPage'] = 'Next';
$s['prevPage'] = 'Previous';
$s['pageOf'] = 'Page %d of %d'; //Page 1 of 48

//fetchupd.php
$s['responseFromServer'] = 'Server response';
$s['foundUpdates'] = 'Found %d update(s)'; //Found 1 update(s)
$s['foundTheseUpdates'] = 'The following updates were found. Click the name of your desired update to continue.';
$s['buildNumber'] = 'Build number: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Select language for %s'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Choose language';
$s['chooseLangDesc'] = 'Choose your desired language';
$s['allLangs'] = 'All languages';
$s['selLangFiles'] = 'Files';
$s['allFiles'] = 'All files';
$s['wubOnly'] = 'WindowsUpdateBox only';
$s['updateOnly'] = 'Update only';
$s['selectLangInfoText1'] = 'Click the <i>Next</i> button to select the desired edition.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe and Cumulative updates can be found in the <i>All languages</i> language.';
$s['allLangsWarn'] = 'The <i>All languages</i> option does not support edition selection.';
$s['clickNextToOpenFindFiles'] = 'Click the <i>Next</i> button to open the page, which allows finding files.';
$s['noLangsAvailable'] = 'There are no languages available for this build.<br>This build cannot be converted to an ISO image.<br>See the <a href="https://github.com/uup-dump/website/blob/master/FAQ.md">FAQ</a> for details.';
$s['browseFiles'] = 'Browse files';
$s['browseFilesDesc'] = 'Quickly browse files in selected build';
$s['searchFiles'] = 'Search files';
$s['toSearchForCUUseQuery'] = 'To search for Cumulative Updates use the <i>%s</i> search query.'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['updateNotProcessed'] = 'UUP dump hasn\'t processed this update\'s metadata yet - this happens automatically once every %d minutes. You can only browse the update\'s file list until then.'; //UUP dump hasn't processed this update's metadata yet - this happens automatically once every 30 minutes. You can only browse the update's file list until then.
$s['updateIsBlocked'] = 'This update has known issues preventing the creation of a working ISO. Because of this, you can only manually browse its files.';

//selectedition.php
$s['selectEditionFor'] = 'Select edition for %s'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Choose edition';
$s['chooseEditionDesc'] = 'Choose your desired edition';
$s['allEditions'] = 'All editions';
$s['selectEditionInfoText'] = 'Click the <i>Next</i> button to open the summary page of your selection.';
$s['additionalEditionsInfo'] = 'If you need <b>additional editions</b> from the table on the right, select their <b>Required edition</b> above and proceed by clicking <i>Next</i>.<br>On the summary page select the <b>Create additional editions</b> option.';
$s['showHiddenEditions'] = 'Show hidden editions (not recommended)';

//download.php
$s['summary'] = 'Summary';
$s['summaryDesc'] = 'Review your selection and choose the download method';
$s['summaryFor'] = 'Summary for %s'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Summary for your selection';
$s['browseList'] = 'Browse the file list';
$s['browseListDesc'] = 'Opens the page with a list of files in the UUP set for manual download.';
$s['aria2Opt1'] = 'Download UUP set';
$s['aria2Opt1Desc'] = 'Easily download the selected UUP set using aria2.';
$s['aria2Opt2'] = 'Download and convert to ISO';
$s['aria2Opt2Desc'] = 'Easily download the selected UUP set using aria2 and convert it to ISO.';
$s['aria2Opt3'] = 'Download, add additional editions and convert to ISO';
$s['aria2Opt3Desc'] = 'Easily download the selected UUP set using aria2, convert, create additional editions and finally create an ISO image.';
$s['jsRequiredToConf'] = 'JavaScript is required to configure and use this option.';
$s['selAdditionalEditions'] = 'Select additional editions';
$s['noAdditionalEditions'] = 'No additional editions are available for your selected editions.';
$s['learnMore'] = 'Learn more';
$s['learnMoreAdditionalEditions1'] = 'This option enables automatic creation of selected additional editions.';
$s['learnMoreAdditionalEditions2'] = 'The list of additional editions is determined by the selected base editions. Below you can check the list of base editions which are needed to create the desired additional editions:';
$s['learnMoreUpdates1'] = 'Updates will be integrated to the converted image only when the conversion script is run on the following systems:';
$s['learnMoreUpdates2'] = 'If you run the conversion script on any other system, the updates will not be integrated to the resulting image.';
$s['systemWithAdk'] = '%s with Windows 10 ADK installed'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = 'Additional updates';
$s['additionalUpdatesDesc'] = 'This UUP set contains additional updates which will be integrated during the conversion process, significantly increasing the creation time.';
$s['browseUpdatesList'] = 'Browse the list of updates';
$s['selectDownloadOptions'] = 'Select your download options';
$s['selectDownloadOptionsSub'] = 'Configure how you would like to download your selection';
$s['downloadMethod'] = 'Download method';
$s['conversionOptions'] = 'Conversion options';
$s['convOpt1'] = 'Use solid (ESD) compression';
$s['convOpt2'] = 'Include updates (Windows converter only)';
$s['convOpt3'] = 'Run component cleanup (Windows converter only)';
$s['convOpt4'] = 'Integrate .NET Framework 3.5 (Windows converter only)';
$s['startDownload'] = 'Create download package';
$s['legalCopeHarder'] = 'By clicking the <i>Create download package</i> button you agree with the following:';
$s['legalCope1'] = 'Installation images created using the scripts provided by UUP dump are meant only for <b>evaluation purposes</b>';
$s['legalCope2'] = 'The images and their deployments are <b>not supported</b> in any way by Microsoft Corporation';
$s['legalCope3v2'] = '<b>The authors are not liable for any damages</b> caused by a misuse of the website';
$s['win1122h2OrLater'] = 'Windows 11, version 22H2 or later';
$s['requiresWindows102004'] = 'This build requires using Windows 10, version 2004 or later for the ISO to be properly created. Scripts for other platforms will output a broken ISO.';

//get.php
$s['listOfFilesFor'] = 'List of files for %s'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Total file size: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'File renaming script';
$s['fileRenamingScriptDesc1'] = 'The script found below can be used to quickly rename downloaded files.';
$s['fileRenamingScriptDesc2'] = 'Simply copy the contents of the form below to a new file with <code>cmd</code> extension, put it in folder with downloaded files and run.';
$s['sha1File'] = 'SHA-1 checksums file';
$s['sha1FileDesc'] = 'You can use this file to quickly verify that files were downloaded correctly.';
$s['aria2NoticeTitle'] = 'Download using aria2 options notice';
$s['aria2NoticeText1'] = 'Download using aria2 options create an archive which needs to be downloaded. The downloaded archive contains all needed files to achieve the selected task.';
$s['aria2NoticeText2'] = 'To start the download process use a script for your platform:';
$s['aria2NoticeText3'] = 'Aria2 is an open source project. You can find it here: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'The UUP Conversion script (Windows version) has been created by %s.'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'The UUP Conversion script (Linux version, macOS version) is open source. You can find it here: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Find files in %s'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'If you want to quickly rename files downloaded from this page, you can generate a renaming script, which will automatically do this for you.';
$s['fileRenamingScriptGenW'] = 'Generate renaming script (Windows)';
$s['fileRenamingScriptGenL'] = 'Generate renaming script (Linux, macOS)';
$s['searchForFiles'] = 'Search for files...';
$s['weFoundFiles'] = '<b>%d</b> files were found for your query.'; //<b>692</b> files were found for your query.
$s['sizeOfShownFiles'] = 'Size of shown files: %s'; //Size of shown files: 2.86 GiB

//Error pages
$s['error'] = 'Error';
$s['requestNotSuccessful'] = 'Request not successful';
$s['anErrorHasOccurred'] = 'An error has occurred while attempting to process your request.';
$s['arm64Warning2022h'] = 'This is an ARM64 build';
$s['arm64Warning2022b'] = '<p>This build is only compatible with:</p><ul><li>Surface Pro X</li><li>Raspberry Pi</li><li>Apple Mac M1</li><li>other glorified mobile phones</li></ul><p>UUP dump authors <i>don\'t have a single one of these</i> and therefore <b>will provide absolutely no support</b>.</p>';

//Error messages
$s['error_ERROR'] = 'Generic error.';
$s['error_UNSUPPORTED_API'] = 'Installed API version is not compatible with this version of UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'The <i>fileinfo</i> directory does not exist.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'The <i>fileinfo</i> database does not contain any build.';
$s['error_SEARCH_NO_RESULTS'] = 'No items found for the performed query.';
$s['error_UNKNOWN_ARCH'] = 'Unknown processor architecture.';
$s['error_UNKNOWN_RING'] = 'Unknown channel.';
$s['error_UNKNOWN_FLIGHT'] = 'Unknown flight.';
$s['error_UNKNOWN_COMBINATION'] = 'The flight and ring combination is not correct. Skip ahead is only supported for Insider Fast ring.';
$s['error_ILLEGAL_BUILD'] = 'Specified build number is less than %d or larger than %d.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Specified build minor is incorrect.';
$s['error_NO_UPDATE_FOUND'] = 'The server returned no updates.';
$s['error_XML_PARSE_ERROR'] = 'Response XML parsing failed. There may be a problem with Microsoft servers. Try again later.';
$s['error_EMPTY_FILELIST'] = 'The server has returned an empty file list.';
$s['error_NO_FILES'] = 'There are no files available for your selection.';
$s['error_NOT_FOUND'] = 'Specified selection cannot be found.';
$s['error_MISSING_FILES'] = 'The selected UUP set has missing files.';
$s['error_NO_METADATA_ESD'] = 'There are no metadata ESD files available for your selection.';
$s['error_UNSUPPORTED_LANG'] = 'Specified language is not supported.';
$s['error_UNSPECIFIED_LANG'] = 'Language was not specified.';
$s['error_UNSUPPORTED_EDITION'] = 'Specified edition is not supported.';
$s['error_UNSUPPORTED_COMBINATION'] = 'The language and edition combination is not correct.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Selected update does not contain a Cumulative Update.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Information about the specified update doesn\'t exist in the database.';
$s['error_KEY_NOT_EXISTS'] = 'Specified key does not exist in update information.';
$s['error_UNSPECIFIED_UPDATE'] = 'Update ID was not specified.';
$s['error_INCORRECT_ID'] = 'Specified Update ID is incorrect. Please make sure that the specified Update ID is correct.';
$s['error_RATE_LIMITED'] = 'You are being rate limited. Please try again in a few seconds.';
$s['error_UNSPECIFIED_VE'] = 'You have not selected any additional editions. If do not wish to create additional editions, please use the <i>Download using aria2 and convert</i> option.';
$s['error_VE_UNAVAILABLE'] = 'Additional editions are not supported for this selection.';
$s['error_INVALID_PAGE'] = 'Specified page is invalid';
$s['errorNoMessage'] = 'Error message unavailable.';

//Languages
$s['lang_ar-sa'] = 'Arabic (Saudi Arabia)';
$s['lang_bg-bg'] = 'Bulgarian';
$s['lang_cs-cz'] = 'Czech';
$s['lang_da-dk'] = 'Danish';
$s['lang_de-de'] = 'German';
$s['lang_el-gr'] = 'Greek';
$s['lang_en-gb'] = 'English (United Kingdom)';
$s['lang_en-us'] = 'English (United States)';
$s['lang_es-es'] = 'Spanish (Spain)';
$s['lang_es-mx'] = 'Spanish (Mexico)';
$s['lang_et-ee'] = 'Estonian';
$s['lang_fi-fi'] = 'Finnish';
$s['lang_fr-ca'] = 'French (Canada)';
$s['lang_fr-fr'] = 'French (France)';
$s['lang_he-il'] = 'Hebrew';
$s['lang_hr-hr'] = 'Croatian';
$s['lang_hu-hu'] = 'Hungarian';
$s['lang_it-it'] = 'Italian';
$s['lang_ja-jp'] = 'Japanese';
$s['lang_ko-kr'] = 'Korean';
$s['lang_lt-lt'] = 'Lithuanian';
$s['lang_lv-lv'] = 'Latvian';
$s['lang_nb-no'] = 'Norwegian (Bokmal)';
$s['lang_nl-nl'] = 'Dutch';
$s['lang_pl-pl'] = 'Polish';
$s['lang_pt-br'] = 'Portuguese (Brazil)';
$s['lang_pt-pt'] = 'Portuguese (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Romanian';
$s['lang_ru-ru'] = 'Russian';
$s['lang_sk-sk'] = 'Slovak';
$s['lang_sl-si'] = 'Slovenian';
$s['lang_sr-latn-rs'] = 'Serbian (Latin)';
$s['lang_sv-se'] = 'Swedish';
$s['lang_th-th'] = 'Thai';
$s['lang_tr-tr'] = 'Turkish';
$s['lang_uk-ua'] = 'Ukrainian';
$s['lang_zh-cn'] = 'Chinese (Simplified)';
$s['lang_zh-hk'] = 'Chinese (Hong Kong)';
$s['lang_zh-tw'] = 'Chinese (Traditional)';

//Channels
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = 'Dev Channel';
$s['channel_beta'] = 'Beta Channel';
$s['channel_releasepreview'] = 'Release Preview Channel';
$s['channel_retail'] = 'Retail';
