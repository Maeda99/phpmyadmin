<?php
/* $Id$ */

/**
 * Original translation to Arabic by Fisal <fisal77 at hotmail.com>
 * Update by Tarik kallida <kallida at caramail.com>
 * Final Update on Februray 4, 2002 by Ossama Khayat <ossamak at nht.com.kw>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'Tahoma, verdana, arial, helvetica, sans-serif';
$right_font_family = '"Windows UI", Tahoma, verdana, arial, helvetica, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('بايت', 'كيلوبايت', 'ميجابايت', 'غيغابايت');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('الأحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت');
$month = array('يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y الساعة %H:%M';

$timespanfmt = '%s يوم، %s ساعة، %s دقيقة و%s ثانية';

$strAPrimaryKey = 'لقد أُضيف المفتاح الأساسي في %s';
$strAbortedClients = 'ألغي';
$strAbsolutePathToDocSqlDir = 'الرجاء كتابة المسار المطلق على خادم الشبكة إلى دليل docSQL';
$strAccessDenied = 'غير مسموح';
$strAccessDeniedExplanation = 'حاول phpMyAdmin الاتصال بخادم MySQL، ورفض الخادم الاتصال. عليك أن تتحقق من المستضيف، أو اسم المستخدم وكلمة المرور في ملف الإعداد config.inc.php وتتأكد أنها مطابقة للمعلومات المعطاة إليك من قبل المسؤول عن خادم MySQL.';  
$strAction = 'العملية';
$strAddAutoIncrement = 'أضف قيمة AUTO_INCREMENT';  
$strAddDeleteColumn = 'إضافه/حذف عمود حقل';
$strAddDeleteRow = 'إضافه/حذف صف سجل';
$strAddDropDatabase = 'أضف أو احذف قاعدة بيانات';
$strAddIntoComments = 'أضف إلى الملاحظات';
$strAddNewField = 'إضافة حقل جديد';
$strAddPriv = 'إضافة إمتياز جديد';
$strAddPrivMessage = 'لقد أضفت إمتياز جديد.';
$strAddPrivilegesOnDb = 'إضافة الصلاحيات على قاعدة البيانات التالية';
$strAddPrivilegesOnTbl = 'إضافة الصلاحيات على الجدول التالي';
$strAddSearchConditions = 'أضف شروط البحث (جسم من الفقره "where" clause):';
$strAddToIndex = 'إضافه كفهرس &nbsp;%s&nbsp;صف(ـوف)';
$strAddUser = 'أضف مستخدم جديد';
$strAddUserMessage = 'لقد أضفت مستخدم جديد.';
$strAddedColumnComment = 'تم إضافة التعليق للعمود';
$strAddedColumnRelation = 'تم إضافة العلاقة للعمود';
$strAdministration = 'إدارة';
$strAffectedRows = 'صفوف مؤثره:';
$strAfter = 'بعد %s';
$strAfterInsertBack = 'الرجوع إلى الصفحة السابقة';
$strAfterInsertNewInsert = 'إدخال تسجيل جديد';
$strAll = 'الكل';
$strAllTableSameWidth = 'أظهر كل الجدوال بنفس العرض؟';
$strAlterOrderBy = 'تعديل ترتيب الجدول بـ';
$strAnIndex = 'لقد أُضيف الفهرس في %s';
$strAnalyzeTable = 'تحليل الجدول';
$strAnd = 'و';
$strAny = 'أي';
$strAnyColumn = 'أي عمود';
$strAnyDatabase = 'أي قاعدة بيانات';
$strAnyHost = 'أي مزود';
$strAnyTable = 'أي جدول';
$strAnyUser = 'أي مستخدم';
$strArabic = 'العربية';  
$strArmenian = 'الأرمنية';  
$strAscending = 'تصاعدياً';
$strAtBeginningOfTable = 'في بداية الجدول';
$strAtEndOfTable = 'في نهاية الجدول';
$strAttr = 'الخواص';
$strAutodetect = 'التفحص التلقائي';  
$strAutomaticLayout = 'مظهر تلقائي';  

$strBack = 'رجوع';
$strBaltic = 'البلطيق';  
$strBeginCut = 'بدء القصّ';
$strBeginRaw = 'بدء بيانات أصليّة';
$strBinary = 'ثنائي';
$strBinaryDoNotEdit = 'ثنائي - لاتحرره';
$strBookmarkDeleted = 'لقد حُذفت العلامه المرجعيه.';
$strBookmarkLabel = 'علامه';
$strBookmarkQuery = 'علامه مرجعيه SQL-إستعلام';
$strBookmarkThis = 'إجعل علامه مرجعيه SQL-إستعلام';
$strBookmarkView = 'عرض فقط';
$strBrowse = 'إستعراض';
$strBrowseForeignValues = 'استعرض القيم الغريبة';  
$strBulgarian = 'البلغارية';  
$strBzError = 'لم يستطع phpMyAdmin ضغط كمّ البيانات بسبب عطل في امتداد Bz2 في إصدار PHP. يُفضّل أن تغيّر قيمة توجيه <code>$cfg[\'BZipDump\']</code> في ملف إعدادات phpMyAdmin إلى <code>FALSE</code>. إن كنت تريد استخدام مزايا ضغط Bz2، عليك بالتحديث إلى إصدار جديد من PHP. لمزيد من التفاصيل، أنظر في تقرير خلل PHP %s.';
$strBzip = '"bzipped"';

$strCSVOptions = 'خيارات القيم المفصولة بفواصل )CSV(';
$strCannotLogin = 'لا يمكن الدخول إلى خادم MySQL';
$strCantLoad = 'لا يمكن قراءة الامتداد %s،<br />رجاء تأكد من إعدادات PHP.';
$strCantLoadMySQL = 'لايمكن تحميل إمتداد MySQL,<br />الرجاء فحص إعدادات PHP.';
$strCantLoadRecodeIconv = 'لم يمكن تحميل iconv أو إعادة تشفير الإمتداد المطلوب لتحويل شيفرة الأحرف، الرجاء إعداد PHP ليسمح باستخدام هذه الإمتدادات أو عطل عمل التحويل في phpMyAdmin.';
$strCantRenameIdxToPrimary = 'لايمكن تغيير إسم الفهرس إلى الأساسي!';
$strCantUseRecodeIconv = 'لا يمكن استخدام iconv ولا libiconv ولا عملية recode_string في حين يحدد الامتداد أنه محمّل. تأكّد من إعدادات PHP.';
$strCardinality = 'Cardinality';
$strCarriage = 'إرجاع الحموله: \\r';
$strCaseInsensitive = 'غير حساس لحالة الأحرف';  
$strCaseSensitive = 'حساس لحالة الأحرف';  
$strCentralEuropean = 'أوروبا الوسطى';  
$strChange = 'تغيير';
$strChangeCopyMode = 'أضف اسم مستخدم جديد بنفس الصلاحيات و...';  
$strChangeCopyModeCopy = ' ... أبق القديم.';  
$strChangeCopyModeDeleteAndReload = ' ... إحذف القديمين من جداول المستخدمين وأعد قراءة الصلاحيات بعد ذلك.';  
$strChangeCopyModeJustDelete = ' ... إحذف القديم من جداول المستخدمين.';  
$strChangeCopyModeRevoke = ' ... استعد كل الصلاحيات الفعالة من القديمين واحذهم بعد ذلك.';  
$strChangeCopyUser = 'غيّر معلومات الدخول / إنسخ اسم مستخدم';  
$strChangeDisplay = 'اختر الحقل لإظهاره';
$strChangePassword = 'تغيير كلمة السر';
$strCharset = 'مجموعة المحارف';  
$strCharsetOfFile = 'شيفرة أحرف الملف:';
$strCharsets = 'مجموعات المحارف';  
$strCharsetsAndCollations = 'مجموعات المحارف وCollations';  
$strCheckAll = 'إختر الكل';
$strCheckDbPriv = 'فحص إمتياز قاعدة البيانات';
$strCheckPrivs = 'تحقق من الصلاحيات';  
$strCheckPrivsLong = 'تحقق من الصلاحيات لقاعدة بيانات &quot;%s&quot;.';  
$strCheckTable = 'التحقق من الجدول';
$strChoosePage = 'رجاءً اختر صفحة لتعديلها';
$strColComFeat = 'إظهار تعليقات العمود';
$strCollation = 'Collation';  
$strColumn = 'عمود';
$strColumnNames = 'إسم العمود';
$strColumnPrivileges = 'صلاحيات خاصة بالحقل';
$strCommand = 'أمْر';
$strComments = 'تعليقات';
$strCompleteInserts = 'الإدخال لقد إكتمل';
$strCompression = 'الضغط';
$strConfigFileError = 'لم يستطع phpMyAdmin أن يقرأ ملف إعداداتك!<br />قد يكون هذا بسبب أن PHP وجد خطأ في الإعراب فيه أو أنه لا يستطيع أن يجد الملف.<br />رجاءً اقرأ الملف بشكل مباشر باستخدام الوصلة أدناه واقرأ رسالة الخطأ الناتجة. في معظم الحالات قد تكون علامة التنصيص أو علامة الفاصلة المنقوطة ناقصة في مكان ما.<br />إن حصلت على صفحة فارغة، فكلّ شيء على ما يرام.';
$strConfigureTableCoord = 'رجاء إعداد الموقع للجدول %s';
$strConfirm = 'هل تريد حقاً أن تفعل ذلك؟';
$strConnections = 'اتصالات';
$strCookiesRequired = 'يجب تفعيل دعم الكوكيز في هذه المرحلة.';
$strCopyTable = 'نسخ الجدول إلى';
$strCopyTableOK = 'الجدول %s لقد تم نسخه إلى %s.';
$strCopyTableSameNames = 'لا يمكن نسخ الجدول إلى نفسه!';  
$strCouldNotKill = 'لم يستطع phpMyAdmin إيقاف العمليّة %s. يبدو أنها أوقفت مسبقاً.';
$strCreate = 'تكوين';
$strCreateIndex = 'تصميم فهرسه على&nbsp;%s&nbsp;عمود';
$strCreateIndexTopic = 'تصميم فهرسه جديده';
$strCreateNewDatabase = 'تكوين قاعدة بيانات جديدة';
$strCreateNewTable = 'تكوين جدول جديد في قاعدة البيانات %s';
$strCreatePage = 'أنشئ صفحة جديدة';
$strCreatePdfFeat = 'إنشاء ملفات PDF';
$strCriteria = 'المعايير';
$strCroatian = 'الكرواتية';  
$strCyrillic = 'السيريلية';  
$strCzech = 'التشيكية';  

$strDBComment = 'ملاحظة قاعدة البيانات: ';
$strDBGContext = 'السياق';
$strDBGContextID = 'رقم السياق';
$strDBGHits = 'استخدامات';
$strDBGLine = 'سطر';
$strDBGMaxTimeMs = 'أقصى وقت، مث';
$strDBGMinTimeMs = 'أقل وقت، مث';
$strDBGModule = 'وِحْدة';
$strDBGTimePerHitMs = 'وقت/استخدام، مث';
$strDBGTotalTimeMs = 'الوقت الكلي، مث';
$strDanish = 'الدنمركية';  
$strData = 'بيانات';
$strDataDict = 'قاموس البيانات';
$strDataOnly = 'بيانات فقط';
$strDatabase = 'قاعدة البيانات ';
$strDatabaseExportOptions = 'خيارات تصدير قاعدة بيانات';
$strDatabaseHasBeenDropped = 'قاعدة بيانات %s محذوفه.';
$strDatabaseNoTable = 'لا تحتوي قاعدة البيانات هذه على جداول!';
$strDatabaseWildcard = 'قاعدة بيانات:';
$strDatabases = 'قاعدة بيانات';
$strDatabasesDropped = 'تم حذف قواعد البيانات %s بنجاح.';  
$strDatabasesStats = 'إحصائيات قواعد البيانات';
$strDatabasesStatsDisable = 'أوقف الإحصائيات';  
$strDatabasesStatsEnable = 'مكّن الإحصائيات';  
$strDatabasesStatsHeavyTraffic = 'ملاحظة: تمكين إحصائيات قواعد البيانات هنا قد يسبب تدفق بيانات ثقيل بين خادم الوب وخادم MySQL.';  
$strDbPrivileges = 'صلاحيات خاصة بقاعدة البيانات';
$strDbSpecific = 'خاص بقاعدة بيانات';  
$strDefault = 'إفتراضي';
$strDefaultValueHelp = 'للقيم الافتراضية، الرجاء أدخل قيمة مفردة، دون علامات هروب أو تنصيص، باستخدام التنسيق: a';  
$strDelOld = 'تحتوي الصفحة الحالية مراجع لجداول لم تعد موجودة. هل تود حذف هذه المراجع؟';  
$strDelete = 'حذف';
$strDeleteAndFlush = 'احذف المستخدمين وقم بإعادة قراءة الصلاحيات بعد ذلك.';
$strDeleteAndFlushDescr = 'هذه هي أنظف طريقة، لكن إعادة قراءة الصلاحيات قد يتطلّب بعض الوقت.';
$strDeleteFailed = 'الحذف خاطئ!';
$strDeleteUserMessage = 'لقد حذفت المستخدم %s.';
$strDeleted = 'لقد تم حذف الصف';
$strDeletedRows = 'الصفوف المحذوفه:';
$strDeleting = 'قيْد حذْف %s';
$strDescending = 'تنازلياً';
$strDescription = 'الوصف';  
$strDictionary = 'قاموس';  
$strDisabled = 'معطّل';
$strDisplay = 'عرض';
$strDisplayFeat = 'إظهار المزايا';
$strDisplayOrder = 'ترتيب العرض:';
$strDisplayPDF = 'إظهار بناء ملف PDF';
$strDoAQuery = 'تجعل "إستعلام بواسطة المثال" (wildcard: "%")';
$strDoYouReally = 'هل تريد حقاً تنفيذ';
$strDocu = 'مستندات وثائقيه';
$strDrop = 'حذف';
$strDropDB = 'حذف قاعدة بيانات %s';
$strDropSelectedDatabases = 'إحذف قواعد البيانات المحددة';  
$strDropTable = 'حذف جدول';
$strDropUsersDb = 'إحذف قواعد البيانات التي لها نفس إسماء المستخدمين.';
$strDumpComments = 'ضمّن ملاحظات العمود كملاحظات SQL ضمن السطر';
$strDumpSaved = 'تم حفظ الـDump إلى الملف %s.';  
$strDumpXRows = 'إحدف %s سطر بدءً من السطر %s.';
$strDumpingData = 'إرجاع أو إستيراد بيانات الجدول';
$strDynamic = 'ديناميكي';

$strEdit = 'تحرير';
$strEditPDFPages = 'عدّل صفحات PDF';
$strEditPrivileges = 'تحرير الإمتيازات';
$strEffective = 'فعال';
$strEmpty = 'إفراغ محتوى';
$strEmptyResultSet = 'MySQL قام بإرجاع نتيجة إعداد فارغه (مثلاً. صف صفري).';
$strEnabled = 'ممكّن';
$strEnd = 'نهايه';
$strEndCut = 'انتهاء القصّ';
$strEndRaw = 'انتهاء البيانات الأصلية';
$strEnglish = 'الإنجليزية';  
$strEnglishPrivileges = ' ملاحظه: إسم الإمتياز لـMySQL يظهر ويُقرأ باللغه الإنجليزيه فقط ';
$strError = 'خطأ';
$strEstonian = 'الإستونية';  
$strExcelOptions = 'خيارات إكسل';  
$strExecuteBookmarked = 'نفّذ استعلام محفوظ بعلامة مرجعية';  
$strExplain = 'إشرح SQL';
$strExport = 'تصدير';
$strExportToXML = 'تصدير بتنسيق XML';
$strExtendedInserts = 'إدخال مُدد';
$strExtra = 'إضافي';

$strFailedAttempts = 'محاولات أخفقت';
$strField = 'الحقل';
$strFieldHasBeenDropped = 'حقل محذوف %s';
$strFields = ' عدد الحقول';
$strFieldsEmpty = ' تعداد الحقل فارغ! ';
$strFieldsEnclosedBy = 'حقل مضمن بـ';
$strFieldsEscapedBy = 'حقل مُتجاهل بـ';
$strFieldsTerminatedBy = 'حقل مفصول بـ';
$strFileAlreadyExists = 'المف %s موجود اصلاً على الخادم. غير الاسم أو حدد خيار التسجيل على الملف الموجود.';  
$strFileCouldNotBeRead = 'لم يمكن قراءة الملف';
$strFileNameTemplate = 'قالب إسم الملف';
$strFileNameTemplateHelp = 'استخدم __DB__ لإسم قاعدة البيانات، __TABLE__ لإسم الجدول و %sany strftime%s لخيارات تحديد الوقت، وسوف يتم إضافة الامتداد. سوف يتم الاحتفاظ بأي نص آخر.';
$strFileNameTemplateRemember = 'تذكر القالب';
$strFixed = 'مثبت';
$strFlushPrivilegesNote = 'ملاحظة: يقرأ phpMyAdmin صلاحيات المستخدمين من جداول الصلاحيات من خادم MySQL مباشرةً. محتويات هذه الجداول قد تختلف عن الصلاحيات التي يستخدمها الخادم إذا ما تمّ التعديل عليها يدويّاً. في هذه الحالة، عليك %s بإعادة قراءة الصلاحيات %s قبل أن تكمل.';
$strFlushTable = 'إعادة تحميل الجدول ("FLUSH")';
$strFormEmpty = 'يوجد قيمه مفقوده بالنموذج !';
$strFormat = 'صيغه';
$strFullText = 'نصوص كامله';
$strFunction = 'دالة';

$strGenBy = 'أنشئ بواسطة';
$strGenTime = 'أنشئ في';
$strGeneralRelationFeat = 'المزايا العامّة للرابط';
$strGerman = 'الألمانية';  
$strGlobal = 'عامّ';  
$strGlobalPrivileges = 'صلاحيّات عامّة';
$strGlobalValue = 'قيمة عامّة';
$strGo = '&nbsp;تنفيــذ&nbsp;';
$strGrantOption = 'مَنْحْ';
$strGrants = 'Grants';
$strGreek = 'اليونانية';  
$strGzip = '"gzipped"';

$strHasBeenAltered = 'لقد عُدِل.';
$strHasBeenCreated = 'لقد تكون.';
$strHaveToShow = 'عليك اختيار عمود واحد على الأقل للعرض';
$strHebrew = 'العبرية';  
$strHome = 'الصفحة الرئيسية';
$strHomepageOfficial = 'الصفحة الرئيسية الرسمية لـ phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin صفحة التنزيل';
$strHost = 'المزود';
$strHostEmpty = 'إسم المستضيف فارغ!';
$strHungarian = 'الهنغارية';  

$strId = 'رقم';
$strIdxFulltext = 'النص كاملاً';
$strIfYouWish = 'إذا كنت ترغب في أن تحمل بعض أعمدة الجدول فقط, حدد بالفاصله التي تفصل قائمة الحقل.';
$strIgnore = 'تجاهل';
$strIgnoringFile = 'تجاهل الملف %s';
$strImportDocSQL = 'استيراد ملفات docSQL';
$strImportFiles = 'استورد الملفات';
$strImportFinished = 'إنتهى الإستيراد';
$strInUse = 'قيد الإستعمال';
$strIndex = 'فهرست';
$strIndexHasBeenDropped = 'فهرسه محذوفه %s';
$strIndexName = 'إسم الفهرس&nbsp;:';
$strIndexType = 'نوع الفهرس&nbsp;:';
$strIndexes = 'فهارس';
$strInnodbStat = 'وضع InnoDB';  
$strInsecureMySQL = 'يحتوي ملف الإعدادت الخاص بك تعيينات )المستخدم root دون كلمة مرور( والذي يشير إلى حساب المستخدم الرئيسي لـMySQL. خادم MySQL الذي يعمل بهذه الإعدادت الافتراضية معرض لخطر الاقتحام، وعليك أن تقوم بإصلاح ثغرة الأمان هذه في أقرب وقت ممكن.';
$strInsert = 'إدخال';
$strInsertAsNewRow = 'إدخال كتسجيل جديد';
$strInsertNewRow = 'إضافة تسجيل جديد';
$strInsertTextfiles = 'إدخال ملف نصي في الجدول';
$strInsertedRowId = 'رقم معرّف السّطر المضاف:';  
$strInsertedRows = 'صفوف مدخله:';
$strInstructions = 'الأوامر';
$strInvalidName = '"%s" كلمه محجوزه, لايمكنك إستخدامها كإسم قاعدة بيانات/جدول/حقل.';

$strJapanese = 'اليابانية';  
$strJumpToDB = 'إذهب إلى قاعدة بيانات &quot;%s&quot;.';  
$strJustDelete = 'فقط قم بحذف المستخدمين من جدول الصلاحيات.';
$strJustDeleteDescr = 'سوف يبقى المستخدمون &quot;المحذوفون&quot; قادرون على الوصول للخادم كالعادة حتى يتم إعادة قراءة الصلاحيات.';

$strKeepPass = 'لاتغير كلمة السر';
$strKeyname = 'إسم المفتاح';
$strKill = 'إبطال';
$strKorean = 'الكورية';  

$strLaTeX = 'لاتِكْسْ';
$strLaTeXOptions = 'خيارات لاتكس';  
$strLandscape = 'عرض الصفحة';
$strLength = 'الطول';
$strLengthSet = 'الطول/القيمه*';
$strLimitNumRows = 'رقم السجلات لكل صفحه';
$strLineFeed = 'خطوط معرفه: \\n';
$strLines = 'خطوط';
$strLinesTerminatedBy = 'خطوط مفصوله بـ';
$strLinkNotFound = 'لم يمكن إيجاد الوصلة';
$strLinksTo = 'مرتبط بـ';
$strLithuanian = 'الليتوانية';  
$strLoadExplanation = 'أفضل طريقة محددة بشكل افتراضي، إلا أنه يمكنك تغييرها إن لم تنجح.';  
$strLoadMethod = 'طريق LOAD';  
$strLocalhost = 'محلي';
$strLocationTextfile = 'مكان ملف نصي';
$strLogPassword = 'كلمة السر:';
$strLogUsername = 'إسم المُستخدم:';
$strLogin = 'دخول';
$strLoginInformation = 'بيانات الدخول';
$strLogout = 'تسجيل خروج';

$strMIME_MIMEtype = 'نوع MIME';
$strMIME_available_mime = 'أنواع MIME المتوفرة';
$strMIME_available_transform = 'التحويلات المتوفرة';
$strMIME_description = 'الوصف';
$strMIME_file = 'إسم الملف';
$strMIME_nodescription = 'ليس هناك وصف متوفر لهذا التحويل.<br />رجاء اسأل الناشر، ما يفعله %s.';
$strMIME_transformation = 'تحويل المتصفح';
$strMIME_transformation_note = 'لعرض قائمة بخيارات التحويل المتوفرة وأنواع تحويلات MIME الخاصة بها، إضغط على %sخيارات التحويل%s';
$strMIME_transformation_options = 'خيارات التحويل';
$strMIME_transformation_options_note = 'رجاءً أدخل القيم لخيارات التحويل باستخدام هذا التنسيق: \'a\',\'b\',\'c\'...<br />إذا احتجت أن تضع شرْطة مائلة ("\") أو علامة تنصيص ("\'") بين هذه القيم، اسبقها بشرْطة مائلة )على سبيل المثال \'\\\\xyz\' أو \'a\\\'b\'(.';
$strMIME_without = 'أنواع MIME التي تظهر بحروف مائلة ليس لها وظيفة تحويل منفصلة';
$strMissingBracket = 'هناك قوس ناقص';
$strModifications = 'تمت التعديلات';
$strModify = 'تعديل';
$strModifyIndexTopic = 'تعديل الفهرسه';
$strMoreStatusVars = 'متغيّرات حالة إضافية';
$strMoveTable = 'نقل جدول إلى (قاعدة بيانات<b>.</b>جدول):';
$strMoveTableOK = '%s جدول تم نقله إلى %s.';
$strMoveTableSameNames = 'لايمكن نقل الجدول إلى نفسه!';  
$strMultilingual = 'متعدد اللغات';  
$strMustSelectFile = 'يجب أن تحدد الملف الذي تريد أن تضيفه.';  
$strMySQLCharset = 'شيفرة أحرف MySQL';
$strMySQLReloaded = 'تم إعادة تحميل MySQL بنجاح.';
$strMySQLSaid = 'MySQL قال: ';
$strMySQLServerProcess = 'MySQL %pma_s1%  على المزود %pma_s2% -  المستخدم : %pma_s3%';
$strMySQLShowProcess = 'عرض العمليات';
$strMySQLShowStatus = 'عرض حالة المزود MySQL';
$strMySQLShowVars ='عرض متغيرات المزود MySQL';

$strName = 'الإسم';
$strNext = 'التالي';
$strNo = 'لا';
$strNoDatabases = 'لايوجد قواعد بيانات';
$strNoDatabasesSelected = 'لا قواعد بيانات محددة';  
$strNoDescription = 'بدون وصف';
$strNoDropDatabases = 'معطل "حذف قاعدة بيانات"الأمر ';
$strNoExplain = 'تخطّي شرح SQL';
$strNoFrames = 'phpMyAdmin أكثر تفهماً مع مستعرض <b>الإطارات</b>.';
$strNoIndex = 'فهرس غير معرف!';
$strNoIndexPartsDefined = 'إجزاء الفهرسه غير معرفه!';
$strNoModification = 'لا تغييرات';
$strNoOptions = 'هذا التنسيق ليس له أي خيارات';
$strNoPassword = 'لا كلمة سر';
$strNoPermission = 'خادم الوب ليس لديه صلاحية لحفظ الملف %s.';  
$strNoPhp = 'بدون شيفرة PHP';
$strNoPrivileges = 'إمتياز غير موجود';
$strNoQuery = 'ليست إستعلام SQL!';
$strNoRights = 'ليس لديك الحقوق الكافيه بأن تكون هنا الآن!';
$strNoSpace = 'لا يوجد مساحة كافية لحفظ الملف %s.';  
$strNoTablesFound = 'لايوجد جداول متوفره في قاعدة البيانات هذه!.';
$strNoUsersFound = 'المستخدم(ـين) لم يتم إيجادهم.';
$strNoUsersSelected = 'لم يتم تحديد مستخدم.';
$strNoValidateSQL = 'تخطّي التأكّد من SQL';
$strNone = 'لاشئ';
$strNotNumber = 'هذا ليس رقم!';
$strNotOK = 'ليس صالحاً';
$strNotSet = 'الجدول <b>%s</b> غير موجود أو محدد في %s';
$strNotValidNumber = ' هذا ليس عدد صف صحيح!';
$strNull = 'خالي';
$strNumSearchResultsInTable = '%s مطابقة في الجدول <i>%s</i>';
$strNumSearchResultsTotal = '<b>المجموع:</b> <i>%s</i>مطابقة';
$strNumTables = 'جداول';

$strOK = 'موافق';
$strOftenQuotation = 'غالباً علامات الإقتباس. إختياري يعني بأن الحقول  char و varchar ترفق بـ " ".';
$strOperations = 'عمليّات';
$strOptimizeTable = 'ضغط الجدول';
$strOptionalControls = 'إختياري. التحكم في كيفية كتابة أو قراءة الأحرف أو الجمل الخاصه.';
$strOptionally = 'إختياري';
$strOptions = 'خيارات';
$strOr = 'أو';
$strOverhead = 'الفوقي';
$strOverwriteExisting = 'خزن على الملفات الموجودة أصلاً';  

$strPHP40203 = 'أنت تستخدم الإصدار 4.2.3 من PHP والذي يحتوي على خلّل خطير في التعامل مع النصوص ثنائية البايت (mbstring). أنظر في تقرير خلل PHP رقم 19404. لا ينصح باستخدام هذه النسخة من PHP مع phpMyAdmin.';
$strPHPVersion = ' PHP إصدارة';
$strPageNumber = 'صفحة رقم:';
$strPaperSize = 'حجم الورق';  
$strPartialText = 'نصوص جزئيه';
$strPassword = 'كلمة السر';
$strPasswordChanged = 'تم تغيير كلمة المرور لـ %s بنجاح.';
$strPasswordEmpty = 'كلمة السر فارغة !';
$strPasswordNotSame = 'كلمتا السر غير متشابهتان !';
$strPdfDbSchema = 'بناء قاعدة البيانات "%s" - الصفحة %s';
$strPdfInvalidPageNum = 'رقم صفحة PDF غير معرّف!';
$strPdfInvalidTblName = 'الجدول "%s" غير موجود!';
$strPdfNoTables = 'لا يوجد جداول';
$strPerHour = 'لكل ساعة';
$strPerMinute = 'لكل دقيقة';
$strPerSecond = 'لكل ثانية';
$strPhoneBook = 'دفتر الهاتف';  
$strPhp = 'أنشئ شيفرة PHP';
$strPmaDocumentation = 'مستندات وثائقيه لـ phpMyAdmin (بالإنجليزية)';
$strPmaUriError = 'المتغير <span dir="ltr"><tt>$cfg[\'PmaAbsoluteUri\']</tt></span> يجب تعديله في ملف الكوفيك !';
$strPortrait = 'طول الصفحة';
$strPos1 = 'بداية';
$strPrevious = 'سابق';
$strPrimary = 'أساسي';
$strPrimaryKey = 'مفتاح أساسي';
$strPrimaryKeyHasBeenDropped = 'لقد تم حذف المفتاح الأساسي';
$strPrimaryKeyName = 'إسم المفتاح الأساسي يجب أن يكون أساسي... PRIMARY!';
$strPrimaryKeyWarning = '("الأساسي" <b>يجب</b> يجب أن يكون الأسم <b>وأيضاً فقط</b> المفتاح الأساسي!)';
$strPrint = 'إطبع';
$strPrintView = 'عرض نسخة للطباعة';
$strPrivDescAllPrivileges = 'يتضمّن كل الصلاحيّات عدا GRANT.';
$strPrivDescAlter = 'يسمح بتعديل بناء الجداول الموجودة مسبقاً.';
$strPrivDescCreateDb = 'يسمح بإنشاء قواعد بيانات وجداول جديدة.';
$strPrivDescCreateTbl = 'يسمح بإنشاء جداول جديدة.';
$strPrivDescCreateTmpTable = 'يسمح بإنشاء جداول مؤقّتة.';
$strPrivDescDelete = 'يسمح بحذف البيانات.';
$strPrivDescDropDb = 'يسمح بحذف قواعد البيانات.';
$strPrivDescDropTbl = 'يسمح بحذف الجداول.';
$strPrivDescExecute = 'يسمح بتشغيل الإجراءات المخزّنة )stored procedures(، ليس له أي تأثير في هذه النسخة من خادم MySQL.';
$strPrivDescFile = 'يسمح باستيراد وتصدير البيانات من وإلى الملفّات.';
$strPrivDescGrant = 'يسمح بإضافة المستخدمين والصلاحيات دون إعادة قراءة جداول الصلاحيات.';
$strPrivDescIndex = 'يسمح بإنشاء وحذف الفهارس.';
$strPrivDescInsert = 'يسمح بإضافة واستبدال البيانات.';
$strPrivDescLockTables = 'يسمح بقفل الجداول للعمليّة الحاليّة.';
$strPrivDescMaxConnections = 'يحدّ من عدد الاتصالات الجديدة التي يمكن للمستخدم فتحها بكل ساعة.';
$strPrivDescMaxQuestions = 'يحدّ عدد الاستعلامات التي يستطيع المستخدم إرسالها إلى الخادم بكل ساعة.';
$strPrivDescMaxUpdates = 'يحدّ عدد الأوامر التي ينفذها المستخدم بكل ساعة، والتي تغير أي جدول أو قاعدة بيانات.';
$strPrivDescProcess3 = 'يسمح بإيقاف عمليّات المستخدمين الأخرين.';
$strPrivDescProcess4 = 'يسمح بعرض الاستعلام بالكامل في سرد العمليات.';
$strPrivDescReferences = 'ليس له أي تأثير في نسخة MySQL الحاليّة.';
$strPrivDescReload = 'يسمح بإعادة تحميل إعدادات الخادم وتفريغ كاش الخادم.';
$strPrivDescReplClient = 'يعطي الحق للمستخدم بالسؤال عن مكان وجود slaves/masters.';
$strPrivDescReplSlave = 'مطلوب لتوابع لاستنساخ.';
$strPrivDescSelect = 'يسمح بقراءة البيانات.';
$strPrivDescShowDb = 'يسمح بالوصول لقائمة أسماء جميع قواعد البيانات.';
$strPrivDescShutdown = 'يسمح بإيقاف عمل الخادم.';
$strPrivDescSuper = 'يسمح بالاتصال، حتى لو وصل حدّ عدد الاتصالات للأقصى.، مطلوب للمهام الإدارية كضبط الإعدادات العامّة other users.';
$strPrivDescUpdate = 'يسمح بتعديل البيانات.';
$strPrivDescUsage = 'لا صلاحيات.';
$strPrivileges = 'الإمتيازات';
$strPrivilegesReloaded = 'تم إعادة قراءة الصلاحيات بنجاح.';
$strProcesslist = 'سرد العمليّات';
$strProperties = 'خصائص';
$strPutColNames = 'ضع أسماء الحقول في السطر الأول';

$strQBE = 'إستعلام بواسطة مثال';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'نافذة الاستعلام';
$strQueryFrameDebug = 'معلومات إزالة الأخطاء';
$strQueryFrameDebugBox = 'المتغيرات الفعّالة لنموذج الاستعلام:\nقاعدة بيانات: %s\nجدول: %s\nخادم: %s\n\nالمتغيرات الحالية لنموذج الاستعلام:\nقاعدة بيانات: %s\nجدول: %s\nخادم: %s\n\nموقع الفاتح: %s\nموقع مجموعة الإطارات: %s.';
$strQueryOnDb = 'في قاعدة البيانات SQL-إستعلام <b>%s</b>:';
$strQuerySQLHistory = 'نصوص SQL سابقة';
$strQueryStatistics = '<b>إحصائيات الاستعلام</b>: %s استعلام أرسل إلى الخادم منذ تشغيله.';
$strQueryTime = 'استغرف الاستعلام %01.4f ثانية';
$strQueryType = 'نوع الاستعلام';
$strQueryWindowLock = 'لا تخزن على هذا الاستعلام من خارج النافذة';  

$strReType = 'أعد كتابه';
$strReceived = 'استُلِم';
$strRecords = 'التسجيلات';
$strReferentialIntegrity = 'تحديد التكامل المرجعي:';
$strRelationNotWorking = 'تمّ تعطيل المزايا الإضافية للعمل بالجداول المترابطة. لمعرفة السبب إضغط %sهنا%s.';
$strRelationView = 'عرض الروابط';
$strRelationalSchema = 'بناء الإرتباطات';
$strRelations = 'الروابط';  
$strReloadFailed = ' إعادة تحميل خاطئهMySQL.';
$strReloadMySQL = 'إعادة تحميل MySQL';
$strReloadingThePrivileges = 'قيد إعادة قراءة الصلاحيات.';
$strRememberReload = 'تذكير لإعادة تحميل الخادم.';
$strRemoveSelectedUsers = 'إحذف المستخدمين المحددين';
$strRenameTable = 'تغيير إسم جدول إلى';
$strRenameTableOK = 'تم تغيير إسمهم إلى %s  جدول%s';
$strRepairTable = 'إصلاح الجدول';
$strReplace = 'إستبدال';
$strReplaceNULLBy = 'استبدل NULL بـ';  
$strReplaceTable = 'إستبدال بيانات الجدول بالملف';
$strReset = 'إلغاء';
$strResourceLimits = 'حدود المصادر';
$strRevoke = 'إبطال';
$strRevokeAndDelete = 'استرجع كل الصلاحيات الفعالة من المستخدمين ثم احذفهم بعد ذلك.';
$strRevokeAndDeleteDescr = 'سوف تبقى الصلاحية USAGE لدى المستخدمين حتى يتم إعادة قراءة الصلاحيات.';
$strRevokeGrant = 'إبطال Grant';
$strRevokeGrantMessage = 'لقد أبطلت إمتياز Grant لـ %s';
$strRevokeMessage = 'لقد أبطلت الأمتيازات لـ %s';
$strRevokePriv = 'إبطال إمتيازات';
$strRowLength = 'طول الصف';
$strRowSize = ' مقاس الصف ';
$strRows = 'صفوف';
$strRowsFrom = 'صفوف تبدأ من';
$strRowsModeFlippedHorizontal = ')عناوين ملتفّة( أفقياً';
$strRowsModeHorizontal = 'أفقي';
$strRowsModeOptions = ' %s و إعادة الرؤوس بعد %s حقل';
$strRowsModeVertical = 'عمودي';
$strRowsStatistic = 'إحصائيات';
$strRunQuery = 'إرسال الإستعلام';
$strRunSQLQuery = 'تنفيذ إستعلام/إستعلامات SQL على قاعدة بيانات %s';
$strRunning = ' على المزود %s';
$strRussian = 'الروسية';  

$strSQL = 'SQL';
$strSQLOptions = 'خيارات SQL';
$strSQLParserBugMessage = 'هناك احتمال أنك عثرت على خلل في مدققّ SQL. رجاءً اختبر استعلامك بدقّة، وتأكّد من أن علامات التنصيص صحيحة ومتطابقة. بعض أسباب الإخفاق الأخرى قد تكون أنك تحاول تحميل ملف يحتوي على بيانات غير نصّية خارج منطقة التنصيص. يمكنك أيضاً تجربة استعلامك بواسطة سطر أوامر MySQL. قد تساعدك رسالة خطأ خادم MySQL أدناه، إن كانت هناك واحدة، على تشخيص المشكلة. إن بقي هناك مشاكل أو إن أخفق المدقّق في حين نجح استخدام سطر الأوامر، رجاءً قلّص حجم استعلامك لاستعلام واحد يسبب المشكلة، وقم بإرسال تقرير خلل مع جزء البيانات في منطقة القصّ أدناه:';
$strSQLParserUserError = 'يبدو أن هناك خطأ في استعلام SQL. سوف تساعدك رسالة الخطأ من خادم MySQL أدناه في تشخيص المشكلة، إن كان هناك واحدة،.';
$strSQLQuery = 'إستعلام-SQL';
$strSQLResult = 'ناتج استعلام SQL';
$strSQPBugInvalidIdentifer = 'معرّف غير صالح';
$strSQPBugUnclosedQuote = 'علامة تنصيص غير مغلقة';
$strSQPBugUnknownPunctuation = 'نص تنقيط غير معروف';
$strSave = 'حفــظ';
$strSaveOnServer = 'إحفظ على الخادم في الدليل %s';  
$strScaleFactorSmall = 'نسبة الحجم المحددة صغيرة جدا لملائمة المخطط في صفحة واحدة.';
$strSearch = 'إبحث';
$strSearchFormTitle = 'إبحث في قاعدة البيانات';
$strSearchInTables = 'داخل الجدول)الجداول(:';
$strSearchNeedle = 'الكلمات أو القيم المطلوب البحث عنها (wildcard: "%"):';
$strSearchOption1 = 'على الأقل أحد الكلمات';
$strSearchOption2 = 'كل الكلمات';
$strSearchOption3 = 'الجملة بالضبط';
$strSearchOption4 = 'كصيغة مطابقة';
$strSearchResultsFor = 'إبحث في النتائج عن "<i>%s</i>" %s:';
$strSearchType = 'إبحث:';
$strSecretRequired = 'يحتاج ملف الإعداد الآن إلى كلمة المرور السريّة.';  
$strSelect = 'إختيار';
$strSelectADb = 'إختر قاعدة بيانات من القائمة';
$strSelectAll = 'تحديد الكل';
$strSelectFields = 'إختيار حقول (على الأقل واحد):';
$strSelectNumRows = 'في الإستعلام';
$strSelectTables = 'إختر الجداول';
$strSend = 'حفظ كملف';
$strSent = 'أُرسِل';
$strServer = 'خادم %s';
$strServerChoice = 'إختيار الخادم';
$strServerStatus = 'بيانات التشغيل';
$strServerStatusUptime = 'مضى على عمل خادم MySQL مدة %s. بدأ العمل في %s.';
$strServerTabProcesslist = 'معالَجات';
$strServerTabVariables = 'متغيّرات';
$strServerTrafficNotes = '<b>سيْر الخادم</b>: تظهر هذه الجداول إحصائيات سيْر بيانات الشبكة لهذا الخادم منذ تشغيله.';
$strServerVars = 'متغيّرات وأعدادات الخادم';
$strServerVersion = 'إصدارة المزود';
$strSessionValue = 'قيمة الجلسة';
$strSetEnumVal = 'إذا كان نوع الحقل هو "enum" أو "set", الرجاء إدخال القيم بإستخدام هذا التنسيق: \'a\',\'b\',\'c\'...<br />إذا كنت تحتاج بأن تضع علامة الشرطه المائله لليسار ("\") أو علامة الإقتباس الفرديه ("\'") فيما بين تلك القيم, إجعلها كشرطه مائله لليسار (مثلاً \'\\\\xyz\' أو \'a\\\'b\').';
$strShow = 'عرض';
$strShowAll = 'شاهد الكل';
$strShowColor = 'أظهر اللون';
$strShowCols = 'شاهد الأعمده';
$strShowDatadictAs = 'تنسيق قامون البيانات';
$strShowFullQueries = 'إعرض الاستعلامات كاملة';  
$strShowGrid = 'أظهر تخطيط الجدول';
$strShowPHPInfo = 'عرض المعلومات المتعلقة ب  PHP';
$strShowTableDimension = 'إظهار أبعاد الجداول';
$strShowTables = 'شاهد الجدول';
$strShowThisQuery = ' عرض هذا الإستعلام هنا مرة أخرى ';
$strShowingRecords = 'مشاهدة السجلات ';
$strSimplifiedChinese = 'الصينية المبسطة';  
$strSingly = '(فردي)';
$strSize = 'الحجم';
$strSort = 'تصنيف';
$strSpaceUsage = 'المساحة المستغلة';
$strSplitWordsWithSpace = 'الكلمات مفصولة بحرف مسافة (" ").';
$strStatCheckTime = 'التحقق الأخير';
$strStatCreateTime = 'الإنشاء';
$strStatUpdateTime = 'التحديث الأخير';
$strStatement = 'أوامر';
$strStatus = 'وضْع';
$strStrucCSV = 'بيانات CSV';
$strStrucData = 'البنية والبيانات';
$strStrucDrop = ' إضافة \'حذف جدول إذا كان موجودا\' في البداية';
$strStrucExcelCSV = 'بيانات CSV لبرنامج ميكروسوفت إكسل';
$strStrucOnly = 'البنية فقط';
$strStructPropose = 'اقترح بناء الجدول';
$strStructure = 'بناء';
$strSubmit = 'إرسال';
$strSuccess = 'الخاص بك تم تنفيذه بنجاح SQL-إستعلام';
$strSum = 'المجموع';
$strSwedish = 'السويدية';  
$strSwitchToTable = 'بدّل إلى الجدول المنسوخ';  

$strTable = 'الجدول ';
$strTableComments = 'تعليقات على الجدول';
$strTableEmpty = 'إسم الجدول فارغ!';
$strTableHasBeenDropped = 'جدول %s حُذفت';
$strTableHasBeenEmptied = 'جدول %s أُفرغت محتوياتها';
$strTableHasBeenFlushed = 'لقد تم إعادة تحميل الجدول %s  بنجاح';
$strTableMaintenance = 'صيانة الجدول';
$strTableOfContents = 'جدول المحتويات';
$strTableOptions = 'خيارات الجدول';  
$strTableStructure = 'بنية الجدول';
$strTableType = 'نوع الجدول';
$strTables = '%s  جدول (جداول)';
$strTblPrivileges = 'صلاحيات خاصة بالجدول';
$strTextAreaLength = ' بسبب طوله,<br /> فمن المحتمل أن هذا الحقل غير قابل للتحرير ';
$strThai = 'التايلندية';  
$strTheContent = 'لقد تم إدخال محتويات ملفك.';
$strTheContents = 'لقد تم إستبدال محتويات الجدول المحدد للصفوف بالمفتاح المميز أو الأساسي المماثل لهما بمحتويات الملف.';
$strTheTerminator = 'فاصل الحقول.';
$strThisHost = 'هذا المضيف';
$strThisNotDirectory = 'لم يكن هذا دليلاً';
$strThreadSuccessfullyKilled = 'تم إيقاف العمليّة %s بنجاح.';
$strTime = 'وقت';
$strToggleScratchboard = 'toggle scratchboard';  
$strTotal = 'المجموع';
$strTotalUC = 'مجموع كلّي';
$strTraditionalChinese = 'الصينية التقليدية';  
$strTraffic = 'بيانات سير';
$strTransformation_image_jpeg__inline = 'يظهر صورة مصغرة للضغط عليها، الخيارات:  العرض، الارتفاع بالبكسل )ويبقي التناسب الأصلي للحجم(.';  
$strTransformation_image_jpeg__link = 'يظهر رابطاً لهذه الصورة (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'إعرض صور/jpeg: بنفس السطر';  
$strTransformation_text_plain__dateformat = 'يتطلّب TIME, TIMESTAMP أو DATETIME والتنسيق باستخدام تنسيق التاريخ المحلي الخاص بك. الخيار الأول هو التعديل )بالساعات) والذي سوف يضاف إلى timestamp )صفر بشكل افتراضي(. الخيار الثاني هو تنسيق تاريخ مختلف بناءً على المتغيرات المتوفرة لـPHP strftime().';
$strTransformation_text_plain__external = 'لينكس فقط: يشغّل تطبيقاً خارجياً و يقوم بتغذية بيانات الحقل عبر المدخل الافتراضي. يسترجع مخرجات التطبيق الافتراضية. القيمة الافتراضية هي Tidy، كي تطبع شيفرة نص HTML بشكل جميل. لأسباب أمنية، عليك أن تقوم بتعديل الملف libraries/transformations/text_plain__external.inc.php وإضافة الأدوات التي تريد أن تسمح لها بالعمل. الخيار الأول عند ذلك هو رقم البرنامج الذي تريد أن تستخدمه والخيار الثاني هو المتغيرات للبرنامج. سوف يقوم الخيار الثالث، إن حدد بقيمة 1، بتحويل المخرجات باستخدام htmlspecialchars() )القيمة الافتراضية 1(. متغير رابع، إن حدد بقيمة 1 سوف يضيف الصفة NOWRAP إلى الخلية الحاوية حتى يصبح المخرج بأكمله بدن إعادة تنسيق )القيمة الافتراضية 1(.';
$strTransformation_text_plain__formatted = 'يُبقي التنسيق الأصلي للحقل. لا يتم عمل أي Escaping.';
$strTransformation_text_plain__imagelink = 'تظهر صورة ورابط، يتحوي الحقل على إسم الملف، الخيار الأول هو سابقة مثل "http://domain.com/"، والخيار الثاني هو العرض بالبكسل، والثالث هو الارتفاع.';  
$strTransformation_text_plain__link = 'تظهر رابطاً، الحقل يحتوي إسم الملف، والخيار الأول هو سابقة مثل "http://domain.com/"، والخيار الثاني هو العنوان للرابط.';  
$strTransformation_text_plain__substr = 'يظهر فقط جزءً من النص. الخيار الأول يحدد مكان بدء ظهور النص )صفر بشكل افتراضي(. الخيار الثاني هو تعديل كمّ النص المسترجع. إن كان فارغاً، يسترجع كل النص الباقي. الخيار الثالث يعرف أي من الأحرف سوف تضاف إلى المخرجات عند استرجاع جزء من النص )... بشكل افتراضي(.';
$strTransformation_text_plain__unformatted = 'يظهر نص شيفرة HTML كوحدات. لا يظهر أي تنسيق HTML.';
$strTruncateQueries = 'إحذف الاستعلامات المعروضة';  
$strTurkish = 'التركية';  
$strType = 'النوع';

$strUkrainian = 'الأكرانية';  
$strUncheckAll = 'إلغاء تحديد الكل';
$strUnicode = 'يونيكود';  
$strUnique = 'مميز';
$strUnknown = 'غير معروفة';  
$strUnselectAll = 'إلغاء تحديد الكل';
$strUpdComTab = 'رجاء راجع التوثيق لكيفية تحديث جدول Column_comments.';  
$strUpdatePrivMessage = 'لقد جددت وحدثت الإمتيازات لـ %s.';
$strUpdateProfile = 'تجديد العرض الجانبي:';
$strUpdateProfileMessage = 'لقد تم تجديد العرض الجانبي.';
$strUpdateQuery = 'تجديد إستعلام';
$strUsage = 'المساحة';
$strUseBackquotes = 'حماية أسماء الجداول و الحقول ب "`" ';
$strUseHostTable = 'استخدم الجدول المضيف';  
$strUseTables = 'إستخدم الجدول';
$strUseTextField = 'استخدم حقل نصّ';
$strUseThisValue = 'استخدم هذه القيمة';  
$strUser = 'المستخدم';
$strUserAlreadyExists = 'إسم المستخدم %s موجود مسبقاً!';
$strUserEmpty = 'إسم المستخدم فارغ!';
$strUserName = 'إسم المستخدم';
$strUserNotFound = 'المستخدم المحدد غير موجود في جدول الصلاحيات.';
$strUserOverview = 'معلومات المستخدم';
$strUsers = 'المستخدمين';
$strUsersDeleted = 'تم حذف المستخدمين المحددين بنجاح.';
$strUsersHavingAccessToDb = 'المستخدمين ذوي صلاحية الوصول إلى &quot;%s&quot;';  

$strValidateSQL = 'التحقق من استعلام SQL';
$strValidatorError = 'لم يمكن تشغيل محقق SQL. الرجاء التأكد مما إذا كنت ثبّتْت إضافات PHP كما هو مشروح في %sالتوثيق%s.';
$strValue = 'القيمه';
$strVar = 'متغيّر';
$strViewDump = 'عرض بنية الجدول ';
$strViewDumpDB = 'عرض بنية قاعدة البيانات';
$strViewDumpDatabases = 'إعرض أو إحفظ بناء قواعد البيانات.';

$strWebServerUploadDirectory = 'دليل تحميل الملفات على خادم الشبكة';
$strWebServerUploadDirectoryError = 'الدليل الذي حددته لتحميل عملك لا يمكن الوصول إليه.';
$strWelcome = 'أهلاً بك في %s';
$strWestEuropean = 'أوروبا الغربية';  
$strWildcard = 'حرف شامل';  
$strWindowNotFound = 'لم يمكن تحديث نافذة المتصفح المستهدفة. يبدو أنك أغلقت الرئيسية أو أن مستعرضك يمنع التحديث عبر النوافذ بسبب إعدادات الأمان.';  
$strWithChecked = ': على المحدد';
$strWritingCommentNotPossible = 'كتابة التعليق غير ممكن';
$strWritingRelationNotPossible = 'كتابة العلاقة غير ممكنة';
$strWrongUser = 'خطأ إسم المستخدم/كلمة السر. الدخول ممنوع.';

$strXML = 'XML';

$strYes = 'نعم';

$strZeroRemovesTheLimit = 'ملاحظة: تغيير هذه الخيارات للرقم 0 )صفر( يلغي الحدّ.';
$strZip = '"zipped" "مضغوط"';

$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strBookmarkOptions = 'Bookmark options';  //to translate

$strCheckOverhead = 'Check overheaded';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate

$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strInternalRelations = 'Internal relations';  //to translate

$strLatexCaption = 'Table caption';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLogServer = 'Server';  //to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate

$strSortByKey = 'Sort by key';  //to translate

$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate

$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
?>
