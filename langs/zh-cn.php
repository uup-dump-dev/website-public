<?php
/*
UUP dump translation file.

Translation information:
English language name: Chinese (Simplified)
Localized language name: 中文（简体）
Language code: zh-CN
Authors: wordlesswind, JRJSheep
*/

//Language information
$s['code'] = 'zh-CN';
$s['timeZone'] = 'Asia/Shanghai'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = '内部版本';
$s['arch'] = '体系结构';
$s['ring'] = '推送通道';
$s['updateid'] = '更新 ID';
$s['update'] = '更新名称';
$s['lang'] = '语言';
$s['edition'] = '版本';
$s['seachForBuilds'] = '搜索内部版本……';
$s['no'] = '否';
$s['yes'] = '是';
$s['yesRecommended'] = '是（推荐）';
$s['next'] = '下一步';
$s['ok'] = '确定';
$s['cancel'] = '取消';
$s['information'] = '信息';
$s['totalDlSize'] = '总下载大小';
$s['file'] = '文件';
$s['expires'] = '过期时间';
$s['sha1'] = 'SHA-1';
$s['size'] = '大小';
$s['additionalEdition'] = '虚拟升级版本';
$s['requiredEdition'] = '所需版本';
$s['unknown'] = '未知';

//global
$s['home'] = '首页';
$s['downloads'] = '下载';
$s['lightMode'] = '浅色模式';
$s['faq'] = '常见问题';
$s['darkMode'] = '深色模式';
$s['sourceCode'] = '源代码';
$s['menu'] = '菜单';
$s['websiteDesc'] = '你可以轻松地从 Windows 更新服务器下载 UUP 文件。此项目不隶属于 Microsoft Corporation。';
$s['notAffiliated'] = '此项目与 Microsoft Corporation 无关。Windows 是 Microsoft Corporation 的注册商标。';
$s['copyright'] = '© %d %s 和贡献者们。'; //© 2019 whatever127 and contributors.
$s['copyrightNew'] = '© %d UUP dump 作者和贡献者们。';
$s['selectLanguage'] = '请选择你的语言';
$s['uupDumpDesc'] = 'UUP dump 允许你直接从 Windows 更新下载统一更新平台（Unified Update Platform）的文件，例如 Windows 预览体验计划更新。';
$s['uupDumpDescSub'] = '在 UUP dump 上%s。UUP dump 允许你直接从 Windows 更新下载统一更新平台（Unified Update Platform）的文件，例如 Windows 预览体验计划更新。'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.

//index.php
$s['slogan'] = '轻松地从 Windows 更新服务器下载 UUP 文件。';
$s['quickOptions'] = '快速选项';
$s['tHeadReleaseType'] = '发布类型';
$s['tHeadDescription'] = '描述';
$s['tHeadArchitectures'] = '体系结构';
$s['latestPublicRelease'] = '公开发布的最新内部版本';
$s['latestPublicReleaseSub'] = '最新用于普通用户的更新版本。';
$s['latestDevRelease'] = '最新 Dev 通道版本';
$s['latestDevReleaseSub'] = '具有最新功能的内部版本，运行可能不稳定。<br>适合高度技术性用户。';
$s['latestBetaRelease'] = '最新 Beta 通道版本';
$s['latestBetaReleaseSub'] = '具有最新可用功能的内部版本，运行较为可靠。<br>适合早期采用者。';
$s['latestRPRelease'] = '最新发布预览通道版本';
$s['latestRPReleaseSub'] = '预览下一个发行版本，可靠性更好。<br>是试用即将发布版本的理想选择。';
$s['advOptions'] = '高级选项';
$s['browseBuilds'] = '浏览已知内部版本列表';
$s['browseBuildsSub'] = '从本地数据库中选择已知的内部版本并下载。';
$s['fetchLatest'] = '获取最新内部版本';
$s['fetchLatestSub'] = '从 Windows 更新服务器检索最新的内部版本信息。';
$s['newlyAdded'] = '新增内部版本';
$s['dateAdded'] = '添加日期';

//newbuild.php
$s['newBuild'] = '新增内部版本';
$s['addNewBuild'] = '添加新内部版本';
$s['selectOptions'] = '选择选项';
$s['newBuildNextText'] = '点击<i>下一步</i>按钮开始搜索指定的选项。';
$s['newBuildUsing'] = '使用此页面';
$s['newBuildUsingText'] = '此页面旨在供希望添加在网站上找不到的版本的高级用户使用。如果你想使用最常用的参数之一，请使用主页上的<i>快速选项</i>之一。';
$s['optionsNotice'] = '选项注意';
$s['optionsNoticeText'] = '在此处查找的选项配置基于 Windows 更新客户端向 Microsoft 服务器报告自身的方式。正确设置这些内容至关重要，否则你将会收到错误。';

//known.php
$s['browseKnown'] = '浏览已知内部版本';
$s['chooseBuild'] = '选择内部版本';
$s['weFoundBuilds'] = '根据你的查询，我们找到了 <b>%d</b> 个内部版本。'; //<b>692</b> builds were found for your query.
$s['sortByDate'] = '按添加日期排序结果';
$s['nextPage'] = '下一页';
$s['prevPage'] = '上一页';
$s['pageOf'] = '第 %d 页，共 %d 页'; //Page 1 of 48

//fetchupd.php
$s['responseFromServer'] = '来自服务器的响应';
$s['foundUpdates'] = '已找到 %d 个更新'; //Found 1 update(s)
$s['foundTheseUpdates'] = '找到了以下更新，点击所需更新的名称以继续。';
$s['buildNumber'] = '内部版本号：%s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = '选择 %s 的语言'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = '选择语言';
$s['chooseLangDesc'] = '选择你想要的语言';
$s['allLangs'] = '全部语言';
$s['selLangFiles'] = '文件';
$s['allFiles'] = '全部文件';
$s['wubOnly'] = '仅限 WindowsUpdateBox';
$s['updateOnly'] = '仅更新';
$s['selectLangInfoText1'] = '点击<i>下一步</i>按钮选择你要下载的版本。';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe 和累积更新可以在<i>全语言</i>中找到。';
$s['allLangsWarn'] = '<i>全语言</i>选项不支持版本选择。';
$s['clickNextToOpenFindFiles'] = '单击<i>下一步</i>按钮打开页面，该页面将允许你查找文件。';
$s['noLangsAvailable'] = '在此内部版本中没有可用的语言。';
$s['browseFiles'] = '浏览文件';
$s['browseFilesDesc'] = '快速浏览所选内部版本中的文件';
$s['searchFiles'] = '搜索文件';
$s['toSearchForCUUseQuery'] = '若要搜索累积更新，请使用 <i>%s</i> 搜索查询。'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['updateNotProcessed'] = 'UUP dump 尚未处理此更新的元数据 —— 这会每 %d 分钟自动发生一次。在此之前，你只能浏览更新的文件列表。'; //UUP dump hasn't processed this update's metadata yet - this happens automatically once every 30 minutes. You can only browse the update's file list until then.
$s['updateIsBlocked'] = '此更新存在阻止创建工作 ISO 文件的已知问题。因此，你只能手动浏览其文件。';

//selectedition.php
$s['selectEditionFor'] = '选择 %s 的版本'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = '选择版本';
$s['chooseEditionDesc'] = '选择你想要的版本';
$s['allEditions'] = '全版本';
$s['selectEditionInfoText'] = '点击<i>下一步</i>按钮以打开所选内容的版本摘要页面。';
$s['additionalEditionsInfo'] = '如果你需要可在右侧表格中找到的其他版本，请选择指定的所需版本，然后单击<i>下一步</i>按钮。在摘要页面上，你可以在相应的下载选项下选择所需的其他版本。';
$s['showHiddenEditions'] = '显示隐藏的版本（不推荐）';

//download.php
$s['summary'] = '摘要';
$s['summaryDesc'] = '检查你的选择，并选择下载方式';
$s['summaryFor'] = '%s 的摘要'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = '来自你所选择版本的摘要';
$s['browseList'] = '浏览文件列表';
$s['browseListDesc'] = '打开包含 UUP 集文件的列表页面，以供手动下载。';
$s['aria2Opt1'] = '下载 UUP 集';
$s['aria2Opt1Desc'] = '使用 aria2 轻松下载所选的 UUP 集。';
$s['aria2Opt2'] = '下载并转换为 ISO 文件';
$s['aria2Opt2Desc'] = '使用 aria2 轻松下载所选的 UUP 集，并转换它为 ISO 文件。';
$s['aria2Opt3'] = '下载、添加虚拟升级版本并转换为 ISO 文件';
$s['aria2Opt3Desc'] = '使用 aria2 轻松下载所选的 UUP 集，转换、创建虚拟升级版本并最终创建一个 ISO 镜像。';
$s['jsRequiredToConf'] = '配置并使用此选项需要 JavaScript。';
$s['selAdditionalEditions'] = '选择虚拟升级版本';
$s['noAdditionalEditions'] = '你选择的版本没有虚拟升级版本可用。';
$s['learnMore'] = '了解更多信息';
$s['learnMoreAdditionalEditions1'] = '此选项可以自动创建所选的其他版本。';
$s['learnMoreAdditionalEditions2'] = '其他版本的列表由所选的基本版本确定，你可以在下面查看创建其他版本所需的基本版本的列表：';
$s['learnMoreUpdates1'] = '只有在以下系统上运行转换脚本时，才会将更新集成到转换后的映像中：';
$s['learnMoreUpdates2'] = '如果在其他任何系统上运行转换脚本，更新将不会集成到所创建的映像中。';
$s['systemWithAdk'] = '%s（已安装 Windows 10 评估和部署工具包）'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = '其他更新';
$s['additionalUpdatesDesc'] = '此 UUP 集在转换过程中将会集成其他更新，这将会显著地增加创建时间。';
$s['browseUpdatesList'] = '浏览更新列表';
$s['selectDownloadOptions'] = '请选择你的下载选项';
$s['selectDownloadOptionsSub'] = '使用何种配置方式下载你所选择的内容';
$s['downloadMethod'] = '下载方式';
$s['conversionOptions'] = '转换选项';
$s['convOpt1'] = '使用固实压缩（ESD）';
$s['convOpt2'] = '当可用时集成更新（仅限 Windows 转换程序）';
$s['convOpt3'] = '在集成更新后运行清理（仅限 Windows 转换程序）';
$s['convOpt4'] = '集成 .NET Framework 3.5（仅限 Windows 转换程序）';
$s['startDownload'] = '创建下载包';
$s['legalCopeHarder'] = '点击<i>创建下载包</i>按钮即表示你同意以下内容：';
$s['legalCope1'] = '使用 UUP dump 提供的脚本创建的安装映像仅可用于<b>评估目的</b>';
$s['legalCope2'] = 'Microsoft Corporation <b>不以任何方式支持</b>映像及其部署';
$s['legalCope3v2'] = '<b>作者不会对</b>因滥用本网站所<b>导致的任何损害负责</b>';
$s['win1122h2OrLater'] = 'Windows 11，版本 22H2 及以上';
$s['requiresWindows102004'] = '此版本需要使用 Windows 10 版本 2004 或更高版本才能正确创建 ISO。其他平台的脚本将会输出一个损坏的 ISO 文件。';

//get.php
$s['listOfFilesFor'] = '%s 的文件列表'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = '文件总大小：%s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = '文件重命名脚本';
$s['fileRenamingScriptDesc1'] = '下方的脚本可用于快速重命名已下载的文件。';
$s['fileRenamingScriptDesc2'] = '只需将下方表格中的内容复制到带有 <code>cmd</code> 扩展名的新文件，并将其放在带有下载文件的文件夹中运行即可。';
$s['sha1File'] = 'SHA-1 文件校验';
$s['sha1FileDesc'] = '你可以使用此信息快速验证文件是否已正确下载。';
$s['aria2NoticeTitle'] = '使用 aria2 选项创建下载';
$s['aria2NoticeText1'] = '使用 aria2 选项下载将创建一个需要你下载的压缩包，在下载的压缩包中包含实现所选任务所需的所有文件。';
$s['aria2NoticeText2'] = '要开始下载过程，请使用适用于你的平台的脚本：';
$s['aria2NoticeText3'] = 'Aria2 是一个开源项目，你可以在这里找到它：%s。'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'UUP 转换脚本（Windows 版本）已由 %s 创建。'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'UUP 转换脚本（Linux 版本、macOS 版本）是开源的，你可以在这里找到它：%s。'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = '在 %s 中查找文件'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = '如果你要对从此页面下载的文件进行快速重命名，可以生成重命名脚本，此脚本将自动为你执行此操作。';
$s['fileRenamingScriptGenW'] = '生成重命名脚本（Windows）';
$s['fileRenamingScriptGenL'] = '生成重命名脚本（Linux、macOS）';
$s['searchForFiles'] = '查找文件……';
$s['weFoundFiles'] = '在你的查询中我们找到了 <b>%d</b> 个文件。'; //We have found <b>692</b> files for your query.
$s['sizeOfShownFiles'] = '显示文件大小：%s'; //Size of shown files: 2.86 GiB

//Error pages
$s['error'] = '错误';
$s['requestNotSuccessful'] = '请求未成功';
$s['anErrorHasOccurred'] = '在尝试处理你的请求时发生错误。';
$s['arm64Warning2022h'] = '这是一个 ARM64 内部版本';
$s['arm64Warning2022b'] = '<p>此内部版本仅兼容：</p><ul><li>Surface Pro X</li><li>树莓派</li><li>苹果 Mac M1</li><li>其他美化手机</li></ul><p>UUP dump 的作者们<i>没有其中的任何一个</i>，因此<b>绝对不会提供任何的支持</b>。</p>';

//Error messages
$s['error_ERROR'] = '一般错误。';
$s['error_UNSUPPORTED_API'] = '已安装的 API 版本与此版本的 UUP dump 不兼容。';
$s['error_NO_FILEINFO_DIR'] = '<i>fileinfo</i> 目录不存在。';
$s['error_NO_BUILDS_IN_FILEINFO'] = '在 <i>fileinfo</i> 数据库中不包含任何内部版本。';
$s['error_SEARCH_NO_RESULTS'] = '找不到要执行查询的项目。';
$s['error_UNKNOWN_ARCH'] = '未知的处理器体系结构。';
$s['error_UNKNOWN_RING'] = '未知的通道。';
$s['error_UNKNOWN_FLIGHT'] = '未知的推送版本。';
$s['error_UNKNOWN_COMBINATION'] = '通道和环的组合不正确。只有快速环才支持向前跳过。';
$s['error_ILLEGAL_BUILD'] = '指定的内部版本号小于 %d 或大于 %d。'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = '指定的次要/服务版本不正确。';
$s['error_NO_UPDATE_FOUND'] = '服务器没有返回任何更新。';
$s['error_XML_PARSE_ERROR'] = '响应 XML 解析失败。Microsoft 服务器可能存在问题，请稍后再试。';
$s['error_EMPTY_FILELIST'] = '服务器返回了一个空的文件列表。';
$s['error_NO_FILES'] = '没有可供你选择的文件。';
$s['error_NOT_FOUND'] = '找不到指定的选择。';
$s['error_MISSING_FILES'] = '选定的 UUP 集缺少文件。';
$s['error_NO_METADATA_ESD'] = '没有可供你选择的 ESD 元数据文件。';
$s['error_UNSUPPORTED_LANG'] = '不支持指定的语言。';
$s['error_UNSPECIFIED_LANG'] = '没有指定语言。';
$s['error_UNSUPPORTED_EDITION'] = '不支持指定版本。';
$s['error_UNSUPPORTED_COMBINATION'] = '语言和版本组合不正确。';
$s['error_NOT_CUMULATIVE_UPDATE'] = '所选更新不包含累积更新。';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = '数据库中不存在有关指定更新的信息。';
$s['error_KEY_NOT_EXISTS'] = '更新信息中不存在指定的密钥。';
$s['error_UNSPECIFIED_UPDATE'] = '未指定更新 ID。';
$s['error_INCORRECT_ID'] = '指定的更新 ID 不正确。 请确保指定的更新 ID 正确无误。';
$s['error_RATE_LIMITED'] = '你受到了限制，请在几秒钟后重试。';
$s['error_UNSPECIFIED_VE'] = '你尚未选择任何其他版本。如果不想创建其他版本，请选择<i>使用 aria2 下载并转换</i>选项。';
$s['error_VE_UNAVAILABLE'] = '此选择不支持其他版本。';
$s['error_INVALID_PAGE'] = '指定的页面无效';
$s['errorNoMessage'] = '错误消息不可用。';

//Languages
$s['lang_ar-sa'] = '阿拉伯语（沙特阿拉伯）';
$s['lang_bg-bg'] = '保加利亚语';
$s['lang_cs-cz'] = '捷克语';
$s['lang_da-dk'] = '丹麦语';
$s['lang_de-de'] = '德语';
$s['lang_el-gr'] = '希腊语';
$s['lang_en-gb'] = '英语（英国）';
$s['lang_en-us'] = '英语（美国）';
$s['lang_es-es'] = '西班牙语（西班牙）';
$s['lang_es-mx'] = '西班牙语（墨西哥）';
$s['lang_et-ee'] = '爱沙尼亚语';
$s['lang_fi-fi'] = '芬兰语';
$s['lang_fr-ca'] = '法语（加拿大）';
$s['lang_fr-fr'] = '法语（法国）';
$s['lang_he-il'] = '希伯来语';
$s['lang_hr-hr'] = '克罗地亚语';
$s['lang_hu-hu'] = '匈牙利语';
$s['lang_it-it'] = '意大利语';
$s['lang_ja-jp'] = '日语';
$s['lang_ko-kr'] = '朝鲜语';
$s['lang_lt-lt'] = '立陶宛语';
$s['lang_lv-lv'] = '拉脱维亚语';
$s['lang_nb-no'] = '挪威语（博克马尔语）';
$s['lang_nl-nl'] = '荷兰语';
$s['lang_pl-pl'] = '波兰语';
$s['lang_pt-br'] = '葡萄牙语（巴西）';
$s['lang_pt-pt'] = '葡萄牙语（葡萄牙）';
$s['lang_ro-ro'] = '罗马尼亚语';
$s['lang_ru-ru'] = '俄语';
$s['lang_sk-sk'] = '斯洛伐克语';
$s['lang_sl-si'] = '斯洛文尼亚语';
$s['lang_sr-latn-rs'] = '塞尔维亚语（拉丁语）';
$s['lang_sv-se'] = '瑞典语';
$s['lang_th-th'] = '泰语';
$s['lang_tr-tr'] = '土耳其语';
$s['lang_uk-ua'] = '乌克兰语';
$s['lang_vi-vn'] = '越南语（越南）';
$s['lang_zh-cn'] = '中文（简体）';
$s['lang_zh-hk'] = '中文（香港）';
$s['lang_zh-tw'] = '中文（繁体）';

//Channels
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = 'Dev 渠道';
$s['channel_beta'] = 'Beta 渠道';
$s['channel_releasepreview'] = '发布预览渠道';
$s['channel_retail'] = '零售';
