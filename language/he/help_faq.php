<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'התחברות והרשמה למערכת'
	),
	array(
		0 => 'מדוע אני צריך להירשם?',
		1 => 'לא בטוח שאתה צריך. המנהל הראשי של המערכת יכול להחליט האם חובה להירשם כדי לפרסם הודעות. בכל אופן, הרשמה תפתח לך גישה לאפשרויות נוספות שלא זמינות לאורחים, כמו למשל הגדרת תמונת פרופיל, שליחת הודעות פרטיות או אימיילים למשתמשים אחרים ועוד. ההרשמה לוקחת כמה רגעים כך שמומלץ להירשם.'
	),
	array(
		0 => 'מהו COPPA?',
		1 => 'COPPA, או החוק לפרטיות והגנה המקוונת של הילד של 1998, הוא חוק בארצות הברית הדורש מאתרים ברשת אשר יכולים לאסוף מידע מקטינים מתחת לגיל 13 לדרוש הסכמה מההורים בכתב או כל שיטה אחרת של אישור מאפוטרופוס חוקי, המאפשר את איסוף פרטי הזיהוי האישיים מקטין מתחת לגיל 14 13. אם אינך בטוח אם חוק זה חל לגביך בתור מישהו המנסה להירשם או לאתר אשר אליו אתה מנסה להירשם, צור קשר עם יועץ חוקי להתיעצות. שים לב שקבוצת phpBB אינה יכולה לספק יעוץ חוקי ואינה נקודה ליצירת קשר לענייני חוק מכל סוג, ובפרט הרשום להלן.',
	),
	array(
		0 => 'מדוע אני לא יכול להרשם?',
		1 => 'יש אפשרות שמנהל ראשי סגר את ההרשמה כדי למנוע ממבקרים חדשים להירשם. לחילופין ייתכן שמנהל ראשי חסם את כתובת ה-IP שלך או את שם המשתמש שאתה מנסה לרשום. צור קשר עם מנהל ראשי לסיוע.',
	),
	array(
		0 => 'נרשמתי אבל אני לא מצליח להתחבר!',
		1 => 'ראשית, בדוק את שם המשתמש והססמה שהזנת. אם הם נכונים, אז כנראה ואת מהדברים הבאים קרה. אם מערכת ה־COPPA פועלת במערכת ובהרשמה סימנת שאתה מתחת לגיל 13, תצטרך לעקוב אחר ההוראות שתקבל. בחלק ממערכות הפורומים דורשים את הפעלת החשבון, על ידי דואר אלקטרוני או מנהל המערכת; מידע זה מוצג במהלך ההרשמה. אם האישור להרשמה נשלח לדואר האלקטרוני, עקוב אחר ההוראות. אם לא קיבלת הודעה לדואר האלקטרוני, כנראה ונתת כתובת דואר אלקטרוני שגויה או שמערכת הדואר האלקטרוני העבירה את הודעת האישור בסינון הספאם. אם אתה בטוח שהפרטים שהזנת נכונים ודואר האלקטרוני אכן נכונה, צור קשר עם מנהל המערכת.'
	),
	array(
		0 => 'למה אני לא מצליח להתחבר?',
		1 => 'יש כמה סיבות אפשריות לכך. קודם כל, ודא ששם המשתמש והססמה שלך נכונים. אם הם נכונים, צור קשר עם מנהל ראשי כדי לוודא שלא נחסמת. לחילופין, יכול להיות שיש שגיאה בהגדרות האתר שהמנהלים שלו יצטרכו לתקן',
	),
	array(
		0 => 'נרשמתי בעבר אבל אני לא מצליח להתחבר יותר?!',
		1 => 'קיימת אפשרות שמנהל ראשי כיבה או מחק את חשבונך מסיבה כלשהי. בנוסף, פורומים רבים מוחקים משתמשים אשר לא פירסמו הודעות זמן רב כדי לצמצם בגודל של בסיס הנתונים. אם זה קרה, נסה להירשם שוב ולהיות יותר פעיל בדיונים.'
	),
	array(
		0 => 'איבדתי את הססמה שלי!',
		1 => 'בלי פאניקה! אי אפשר לשחזר את הססמה שלך, אבל כן אפשר לאפס אותה. בקר בדף ההתחברות ולחץ על <em>שכחתי את ססמתי</em>. עקוב אחר ההוראות ותוכל להתחבר שוב תוך זמן קצר.<br />אם בכל זאת לא תצליח לאפס את הססמה, צור קשר עם מנהל ראשי',
	),
	array(
		0 => 'מדוע אני מתנתק באופן אוטומטי?',
		1 => 'אם לא תסמן את לבדוק את תיבת הסימון <em>זכור אותי</em> בעת הכניסה, המערכת תשאיר אותך מחובר רק לזמן שנקבע מראש. הדבר מונע שימוש לרעה בחשבונך על ידי מישהו אחר. כדי להישאר מחובר, סמן את התיבה במהלך ההתחברות. הפעולה הזו לא מומלצת כאשר אתה מחובר לפורום במחשב משותף, למשל בספריה, קפה אינטרנט, מחשבי מעבדות באוניברסיטה וכו׳. אם אתה לא רואה את התיבה, כנראה שמנהל המערכת ביטל את האפשרות הזו.'
	),
	array(
		0 => 'מה האפשרות “מחק את כל עוגיות המערכת” עושה?',
		1 => '"מחק את כל עוגיות המערכת" מוחק את כל העוגיות (cookies) שנוצרו על ידי phpBB ושומרות עליך מחובר למערכת. עוגיות ממלאות תפקידים נוספים כמו מעקב קריאה של נושאים והודעות אם האפשרות הופעלה על ידי מנהל ראשי. אם נתקלת בבעיות של התחברות והתנתקות, מחיקת עוגיות המערכת יכולה לעזור.',
	),
	array(
		0 => '--',
		1 => 'אפשרויות והגדרות משתמש'
	),
	array(
		0 => 'כיצד אני משנה את ההגדרות שלי?',
		1 => 'אם אתה משתמש רשום, כל הגדרותיך שמורות במסד הנתונים. כדי לשנותם, בקר בלוח הבקרה למשתמש שלך; בדרך כלל ניתן למצוא קישור על ידי לחיצה על שם המשתמש שלך בחלק העליון של דפי מערכת הפורומים. מערכת זו תאפשר לך לשנות את ההגדרות וההעדפות שלך.',
	),
	array(
		0 => 'איך אני מונע משם המשתמש שלי מלהופיע ברשימת המשתמשים המחוברים?',
		1 => 'בעזרת לוח הבקרה למשתמש, תחת הכותרת “אפשרויות מערכת”,אתה תמצא אפשרות <em>הסתר את מצבי כמחובר</em>. הפעל אפשרות זו <samp>כן</samp>ורק מנהלי המערכת, מנהלי פורומים ואתה עצמך תהיו אלה שיראו אותך מחובר. אתה תספר כמשתמש מוסתר.'
	),
	array(
		0 => 'הזמנים אינם נכונים!',
		1 => 'יכול להיות שהזמן המוצג שונה מהזמנים באזורך. אם זאת הבעיה, בקר בלוח הבקרה למשתמש ושנה את הזמן על פי אזורך, לדוגמה לונדון, פאריס, ניו יורק, וכדומה. שים לב ששינוי אזור הזמן, כמו רוב ההגדרות, ניתן אך ורק למשתמשים רשומים. אם אינך רשום במערכת, זה הזמן הנכון להירשם.'
	),
	array(
		0 => 'שינתי את אזור הזמן והוא עדין שונה מהזמן שלי!',
		1 => 'אם אתה בטוח שהגדרת את אזור הזמן נכון והזמן עדין אינו מכוון כראוי, אז כנראה והשעה המוגדרת בשרת אינה נכונה. אנא יידע מנהל ראשי כדי לתקן את הבעיה'
	),
	array(
		0 => 'השפה שלי אינה ברשימה!',
		1 => 'או שהמנהל הראשי לא התקין השפה או שאף אחד לא תרגם את המערכת לשפה שלך. נסה לשאול מנהל ראשי האם הוא יכול להתקין את חבילת השפה שאתה צריך. אם חבילת השפה אינה קיימת, תרגיש חופשי ליצור תרגום חדש. ניתן למצוא מידע נוסף באתר <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	),
	array(
		0 => 'מה הן התמונות לצד שם המשתמש שלי?',
		1 => 'ישנם שני סוגי תמונות אשר עשויים להופיע יחד עם שם המשתמש כאשר צופים בהודעות. אחד מהם עשוי להיות תמונה הקשורה לדרגה שלך, בדרך כלל בצורה של כוכבים, ריבועים או נקודות, המציין כמה הודעות כתבת או את מעמדך בפורום. תמונה אחרת, בדרך כלל גדולה יותר, ידועה כסמל אישי ובדרך כלל ייחודית או אישית לכל משתמש.',
	),
	array(
		0 => 'איך אני יכול להציג סמל אישי?',
		1 => 'בתוך לוח הבקרה למשתמש תחת "פרופיל" אתה יכול להוסיף סמל אישי באמצעות אחת מארבע השיטות הבאות: Gravatar, גלריה, תמונה מרוחקת או העלאה. המנהל הראשי של הפורום יכול להחליט לאפשר סמלים אישיים ולבחור את הדרך שבה ניתן לבחור סמלים אישיים. אם אתה לא מצליח להשתמש בסמל אישי, צור קשר עם מנהל ראשי.',
	),
	array(
		0 => 'מהו הדירוג שלי וכיצד אני משנה אותו?',
		1 => 'דירוגים, אשר מופיעים תחת שם המשתמש שלך, מציינים את מספר ההודעות אשר שלחת או מזהים משתמשים מסוימים, למשל מנהלים או מנהלים ראשיים. כעיקרון, אינך יכול לשנות את הנוסח של כל אחד מדירוגי המערכת באופן ישיר מפני שהם נקבעים על־ידי המנהל הראשי של המערכת. אנא אל תפגע במערכת על־ידי שליחת הודעות מיותרות רק כדי הגדיל את הדירוג שלך. רוב המערכות לא יאפשרו זאת והמנהל או המנהל הראשי יקטין את מונה ההודעות שלך.'
	),
	array(
		0 => 'כאשר אני לוחץ על קישור הדואר האלקטרוני של משתמש הוא מבקש ממני להתחבר?',
		1 => 'רק משתמשים רשומים יכולים לשלוח לחברי הפורום הודעות לדואר האלקטרוני באמצעות טופס השליחה במערכת, וזאת עם מנהלי המערכת מאפשרים עזר זה. זה מונע משליחת הודעות ספאם והודעות היכולות לפגוע במשתמשי המערכת.'
	),
	array(
		0 => '--',
		1 => 'מערכת השליחה'
	),
	array(
		0 => 'איך אני יוצר נושא חדש או מפרסם תגובה?',
		1 => 'כדי לפרסם נושא חדש בפורום, לחץ על "נושא חדש". כדי להגיב לנושא, לחץ על "פרסם תגובה". ייתכן שתצטרך להירשם לפני שתוכל לשלוח הודעה.רשימת ההרשאות שלך בכל פורום זמינה בתחתית מסכי פורום ונושא. לדוגמא: אתה יכול לשלוח נושאים חדשים, אתה יכול לצרף קבצים להודעות, וכן הלאה',
	),
	array(
		0 => 'כיצד אני עורך או מוחק הודעה?',
		1 => 'אם אינך מנהל או מנהל ראשי של המערכת, תוכל לערוך או למחוק את ההודעות שלך בלבד. אתה יכול לערוך הודעה על־ידי לחיצה על כפתור העריכה להודעה המיוחסת, לפעמים לזמן מוגבל בלבד לאחר שההודעה נשלחה. אם מישהו כבר הגיב להודעה, תמצא תוספת קטנה של טקסט המוצג מתחת להודעה כאשר אתה חוזר לנושא אשר רושם את מספר הפעמים שערכת אותה יחד עם התאריך והשעה. טקסט זה יופיע רק אם נשלחה להודעה תגובה. הוא לא יופיע אם מנהל או מנהל ראשי ערך את ההודעה, אך הם יכולים להשאיר הערה אשר מסבירה מדוע הם ערכו את ההודעה לפי ראות עיניהם. שים לב שמשתמשים רגילים לא יכולים למחוק הודעה לאחר שקיבלה תגובה.'
	),
	array(
		0 => 'כיצד אני מוסיף חתימה להודעות שלי?',
		1 => 'כדי להוסיף חתימה להודעה אתה חייב קודם ליצור אחת דרך לוח הבקרה למשתמש שלך. לאחר שנוצרה, אתה יכול לסמן את התיבה <em>צרף חתימה</em> בטופס השליחה כדי להוסיף את החתימה שלך. אתה יכול גם להוסיף חתימה כברירת מחדל לכל ההודעות שלך על־ידי בחירת האפשרות המתאימה בלוח הבקרה למשתמש. אם תעשה כך, תוכל עדיין למנוע מהחתימה להתווסף להודעות מסוימות על־ידי ביטול הסימון לתיבת הוספת החתימה בטופס השליחה.'
	),
	array(
		0 => 'כיצד אני יוצר סקר?',
		1 => 'בזמן שליחת נושא חדש או עריכת ההודעה הראשונה של הנושא, לחץ על התווית “יצירת סקר” תחת טופס השליחה הראשי. אם אתה לא יכול לראות אותה, אין לך את ההרשאות המתאימות ליצירת סקרים. הזן כותרת ולפחות שתי אפשרויות להצבעה בשדות המתאימים וודא שכל אפשרות בשורה נפרדת בתיבת הטקסט. אתה יכול גם לקבוע את מספר האפשרויות אשר משתמשים יכולים לבחור במשך ההצבעה תחת “אפשרויות לכל משתמש”, זמן הגבלה לסקר בימים (0 לצמיתות) ולבסוף האפשרות אשר מאפשרת למשתמשים לשנות את ההצבעות שלהם.'
	),
	array(
		0 => 'מדוע אני לא יכול להוסיף אפשרויות נוספות לסקר?',
		1 => 'גבול האפשרויות בסקר נקבע ע"י שיקול דעתו של מנהל המערכת. אם אתה חושב שכמות האפשרויות לא מספיקה לך, פנה למנהל המערכת.'
	),
	array(
		0 => 'כיצד אני ערוך או מוחק סקר?',
		1 => 'כמו בהודעות, רק השולח המקורי, מנהל או מנהל ראשי יכולים לערוך סקרים. כדי לערוך סקר, לחץ כדי לערוך את ההודעה הראשונה בנושא. היא תמיד מכילה את הסקר הנקבע לנושא. אם אף אחד לא הצביע, ניתן למחוק את הסקר או לשנות כל אחת מהאפשרויות שלו. עם זאת, אם משתמשים כבר הצביעו בסקר, רק מנהלים או מנהלים ראשיים יכולים לערוך או למחוק אותו. כך נמנע מאפשרויות הסקר להשתנות באמצע תקופת הסקר.'
	),
	array(
		0 => 'מדוע איני יכול להיכנס לפורום?',
		1 => 'חלק מהפורומים מוגבלים לקבוצות משתמשים מסוימות. בכדי לצפות, לקרוא, לשלוח או לערוך אתה צריך גישות מסוימות, פנה למנהל המערכת בשביל לקבלם.'
	),
	array(
		0 => 'מדוע אני לא יכול להוסיף קבצים מצורפים?',
		1 => 'הרשאות צירוף קבצים נקבעות בכל פורום, לכל קבוצה, או לכל משתמש בפרט. המנהל הראשי של המערכת יכול לא לאפשר צירוף קבצים לפורום המסוים בו אתה שולח, או יתכן שרק קבוצות מסוימות יכולות לצרף קבצים. צור קשר עם המנהל הראשי של המערכת אם אינך בטוח מדוע אינך יכול לצרף קבצים.'
	),
	array(
		0 => 'מדוע קיבלתי אזהרה?',
		1 => 'כל מנהל ראשי של מערכת קובע את חוקי האתר שלו. אם עברת על חוק, יתכן שקיבלת אזהרה. שים לב כי זוהי החלטת המנהל הראשי של המערכת, וקבוצת phpBB לא יכולה לעשות דבר עם האזהרות באתר הנתון. צור קשר עם המנהל הראשי של המערכת אם אינך בטוח מדוע קיבלת אזהרה.'
	),
	array(
		0 => 'כיצד ניתן לדווח למנהל על הודעות?',
		1 => 'אם מנהל המערכת מאפשר זאת, אתה תראה כפתור דיווח הודעות ליד כפתור השליחת הודעה. על ידי לחיצה על הכפתור תעבור לפעולות הדיווח על הודעה.'
	),
	array(
		0 => 'מהו כפתור ה“שמור” בשליחת הנושא?',
		1 => 'אפשרות זאת מאפשרת לך לשמור הודעות שנכתבו לשליחה מאוחרת, תוכל להגיע אליהם שנית לאחר השמירה ע"י ביקור בלוח הבקרה למשתמש.'
	),
	array(
		0 => 'מדוע הודעותי צריכות לקבל אישור?',
		1 => 'המנהל הראשי של המערכת יכול להחליט שההודעות בפורום בו אתה מנסה לכתוב נדרשות להיבדק לפני הצגתן. יתכן גם שהמנהל הראשי הכניס אותך לקבוצה של משתמשים אשר ההודעות שלהם צריכות להיבדק טרם הצגתן. אנא צור קשר על המנהל הראשי של המערכת למידע נוסף.'
	),
	array(
		0 => 'כיצד אני יכול להקפיץ את הודעתי?',
		1 => 'על־ידי לחיצה על הקישור “הקפץ נושא” כאשר אתה צופה בו, אתה יכול “להקפיץ” את הנושא לראש הפורום בעמוד הראשון. עם זאת, אם אינך רואה את הקישור, הקפצת הנושא יכולה להיות כבויה או הזמן המוקצב בין הקפצות עדיין לא הסתיים. ניתן גם להקפיץ את הנושא בפשטות על־ידי שליחת תגובה אליו, אך וודא שאתה מציית לחוקי המערכת כאשר אתה עושה כך.'
	),
	array(
		0 => '--',
		1 => 'עיצוב טקסט וסוגי נושאים'
	),
	array(
		0 => 'מה זה BBCode?',
		1 => 'BBCode הוא צורה מיוחדת של HTML, המציע שליטה נהדרת בעיצוב בחלקים מסוימים בהודעה. השימוש ב־BBCode נקבע על־ידי המנהל הראשי, אבל ניתן גם לכבות אותו בכל הודעה בפרט מטופס השליחה. BBCode עצמו דומה במבנה ל־HTML, אך התגים תחמים בסוגריים המרובעים [ ו־] במקום ב־&lt; ו־&gt;. למידע נוסף על BBCode ראה את המדריך אליו ניתן לגשת מעמוד השליחה.'
	),
	array(
		0 => 'האם אני יכול להשתמש ב־HTML?',
		1 => 'לא. אין אפשרות לשלוח HTML במערכת זו והוא יוצג בהודעות בתור HTML. רוב עיצובי הטקסט אשר ניתן לבצע ב־HTML ניתן גם לבצע בעזרת BBCode במקום.'
	),
	array(
		0 => 'מה הם סמיילים?',
		1 => 'סמיילים, או הבעות, הם תמונות קטנות אשר ניתן להשתמש בהם כדי להביע הרגשה בעזרת קוד קצר, למשל :) מציין שמח, בעוד :( מסמן עצוב. את הרשימה המלאה של ההבעות ניתן לראות בטופס השליחה. נסה לא להגזים בסמיילים, מפני שהם יכולים להפוך את ההודעה ללא קריאה ומנהל יכול להוציא אותם או להסיר את ההודעה בשלמותה. המנהל הראשי של המערכת יכול גם לקבוע הגבלה למספר הסמיילים אשר תוכל להוסיף להודעות.'
	),
	array(
		0 => 'האם אני יכול להוסיף תמונות להודעות?',
		1 => 'כן, ניתן להציג תמונות בהודעות שלך. אם המנהל הראשי מאפשר צירוף קבצים, תוכל גם להעלות את התמונה למערכת. אחרת, אתה חייב לקשר לתמונה המאוחסנת בשרת רחוק הנגיש לכולם, למשל http://www.example.com/my-picture.gif. אינך יכול לקשר לתמונות המאוחסנות על המחשב האישי שלך (אלא אם כן הוא שרת הנגיש לכולם) ולא תמונות המאוחסנות מאחורי מנגנוני אימות, למשל תיבות הדואר של hotmail או yahoo, אתרים המוגנים בססמה, וכד\'. כדי להציג את התמונה בעזרת התג [img] של BBCode.'
	),
	array(
		0 => 'מה הן הכרזות גלובליות?',
		1 => 'הכרזות גלובליות מכילות מידע חשוב ואתה צריך לקרוא אותן בכל שעה אפשרית. הן יופיעו בראש של כל פורום ובלוח הבקרה למשתמש שלך. הרשאות הכרזה גלובלית נקבעות על־ידי המנהל הראשי של המערכת.'
	),
	array(
		0 => 'מה הן הכרזות?',
		1 => 'הכרזות בדרך כלל מכילות מידע חשוב לפורום בו אתה כרגע קורא וצריך לקרוא אותן מתי שניתן. ההכרזות מופיעות בראש של כל עמוד בפורום בו הן נשלחו. כמו בהכרזות הגלובליות, הרשאות הכרזה נקבעות על־ידי המנהל הראשי של המערכת.'
	),
	array(
		0 => 'מה הם נושאים דביקים?',
		1 => 'נושאים דביקים מופיעים בפורום מתחת להכרזות ורק בעמוד הראשון. הם בדרך כלל חשובים כך שאתה אמור לקרוא אותם בכל שעה נתונה. כמו בהכרזות ובהכרזות הגלובליות, הרשאות נושא דביק נקבעות על־ידי המנהל הראשי של המערכת.'
	),
	array(
		0 => 'מה הם נושאים נעולים?',
		1 => 'נושאים נעולים הם נושאים אשר המשתמשים אינם יכולים להגיב אליהם יותר וכל סקר אשר הם עלולים להכיל יסתיים אוטומטית. הנושאים יכולים להיות נעולים מסיבות רבות ונקבעו כך על־ידי מנהל הפורום או המנהל הראשי של המערכת. תוכל גם לנעול את הנושאים שלך לפי ההרשאות אשר נקבעו על־ידי המנהל הראשי של המערכת.'
	),
	array(
		0 => 'מה הם אייקונים לנושא?',
		1 => 'אייקונים לנושא הם תמונות בבחירת הכותב הנקבעות להודעות כדי לרמוז על תוכנן. האפשרות להשתמש באייקונים לנושא תלויה בהרשאות אשר נקבעו על־ידי המנהל הראשי של המערכת.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'רמות משתמשים וקבוצות'
	),
	array(
		0 => 'מה הם מנהלים ראשיים?',
		1 => 'מנהלים ראשיים הם משתמשים אשר נקבעו עם הרמה הגבוהה ביותר של שליטה בכל המערכת. משתמשים אלו יכולים לשלוט בכל חלקי המערכת, כולל הגדרת הרשאות, חסימת משתמשים, יצירת קבוצות משתמשים או מנהלים, וכד\', תלויים תחת מייסד המערכת ובהרשאות אשר הוא נתן להם. הם יכולים גם להיות בעלי הרשאות ניהול מלאות בכל הפורומים, לפי ההגדרות אשר נקבעו על־ידי מייסד המערכת.'
	),
	array(
		0 => 'מה הם מנהלים?',
		1 => 'מנהלים הם משתמשים (או קבוצות של משתמשים) אשר מפקחים על הפורומים בכל יום. יש להם את ההרשאות לערוך ולמחוק הודעות ולנעול, לשחרר נעילה, להעביר, למחוק ולפצל נושאים בפורום אותו הם מנהלים. בדרך כלל, מנהלים נקבעו כדי למנוע ממשתמשים מלצאת מהנושא או משליחת הודעות הפוגעות בפורום.'
	),
	array(
		0 => 'מה הם קבוצות משתמשים?',
		1 => 'קבוצות משתמשים הם קבוצות של משתמשים אשר מחלקים את הקהילה לחלקים הניתנים לניהול על־ידי המנהלים הראשיים של המערכת. כל משתמש יכול להשתייך לכמה קבוצות ולכל קבוצה יכולות להיקבע ההרשאות שלה. הן מספקות דרך קלה למנהלים ראשיים לשנות הרשאות להרבה משתמשים בפעם אחת, כמו שינוי הרשאות מנהל וקביעת גישות למשתמשים לפורומים פרטיים.'
	),
	array(
		0 => 'היכן נמצאות קבוצות המשתמשים וכיצד אני מצטרף לאחת?',
		1 => 'אתה יכול לצפות בכל קבוצות המשתמשים דרך הקישור “קבוצות משתמשים” בלוח הבקרה למשתמש שלך. אם תרצה להצטרף לאחת, המשך על־ידי לחיצה על הכפתור המתאים. לא כל הקבוצות בעלות גישה פתוחה. כמה יכולות לדרוש אישור להצטרפות, כמה יכולות להיות סגורות וכמה יכולות אף להסתיר את חברי הקבוצה. אם הקבוצה פתוחה, אתה יכול להצטרף אליה על־ידי לחיצה על הכפתור המתאים. אם קבוצה דורשת אישור להצטרפות תוכל לבקש להצטרף על־ידי לחיצה על הכפתור המתאים. ראש קבוצת המשתמשים צריך לאשר את בקשתך ויכול לשאול אותך מדוע אתה רוצה להצטרף לקבוצה. אנא אל תטריד ראש קבוצה אם הוא דחה את בקשתך. יכולות להיות לו הסיבות שלו.'
	),
	array(
		0 => 'כיצד אני הופך לראש קבוצת משתמשים?',
		1 => 'ראש קבוצת משתמשים נקבע בדרך כלל בעת יצירת הקבוצה על־ידי המנהל הראשי של המערכת. אם אתה מעוניין ביצירת קבוצת משתמשים, אתה צריך ראשית ליצור קשר עם המנהל הראשי. נסה שליחת הודעה פרטית.',
	),
	array(
		0 => 'למה קבוצות משתמשים מסוימות מופיעות בצבעים שונים?',
		1 => 'המנהל הראשי של המערכת יכול לקבוע צבע לחברי קבוצת משתמשים מסוימת כדי להפוך את זיהוי חברי הקבוצה לקל יותר.'
	),
	array(
		0 => 'מה היא “קבוצת משתמשים כברירת מחדל”?',
		1 => 'אם אתה חבר של יותר מקבוצת משתמשים אחת, ברירת המחדל בשימוש כדי לקבוע איזה צבע קבוצה ודירוג קבוצה יוצגו לך כברירת מחדל. המנהל הראשי של המערכת יכול לאפשר לך הרשאה לשנות את קבוצת המשתמשים כברירת מחדל שלך דרך לוח הבקרה למשתמש שלך.'
	),
	array(
		0 => 'מהו הקישור “הצוות”?',
		1 => 'עמוד זה מספק לך את רשימת הצוות של המערכת, כולל המנהלים הראשיים של המערכת והמנהלים ופרטים אחרים כמו הפורומים שהם מנהלים.'
	),
	array(
		0 => '--',
		1 => 'הודעות פרטיות'
	),
	array(
		0 => 'אני לא יכול לשלוח הודעות פרטיות!',
		1 => 'ישנן שלוש סיבות לכך: אינך רשום ו/או מחובר, המנהל הראשי של המערכת כיבה את ההודעות הפרטיות למערכת כולה, או המנהל הראשי של המערכת מונע ממך משליחת הודעות. צור קשר עם המנהל הראשי של המערכת למידע נוסף.'
	),
	array(
		0 => 'אני ממשיך לקבל הודעות פרטיות לא רצויות!',
		1 => 'אתה יכול למחוק הודעות פרטיות ממשתמש מסוים, בצורה אוטומטית, באמצעות כללי ההודעות בלוח הבקרה למשתמש (הודעות פרטיות -> כללים, תיקיות והגדרות). אם אתה מקבל הודעות פוגעניות ממשתמש מסוים, דווח על ההודעות למנהלים. יש להם את האפשרות למנוע מהמשתמש לשלוח הודעות פרטיות.'
	),
	array(
		0 => 'קיבלתי דואר אלקטרוני לא רצוי ממישהו מהמערכת הזאת!',
		1 => 'אנו מצטערים לשמוע זאת. מאפיין טופס הדואר האלקטרוני של מערכת זו כולל אמצעי אבטחה כדי לנסות ולעקוב אחר משתמשים אשר שולחים הודעות כאלו, כך שתוכל לשלוח הודעת דואר אלקטרוני למנהל הראשי של המערכת עם העתק מלא של הודעה זו. חשוב מאוד לכלול את הכותרות אשר מכילות את פרטי המשתמש ששלח את ההודעה. המנהל הראשי יוכל לפעול אחר כך.'
	),
	array(
		0 => '--',
		1 => 'חברים ונודניקים'
	),
	array(
		0 => 'מהם רשימת החברים והנודניקים שלי?',
		1 => 'אתה יכול להשתמש ברשימות אלו כדי לסדר את המשתמשים האחרים של המערכת. משתמשים המתווספים לרשימת החברים שלך ירשמו בלוח הבקרה למשתמש שלך לגישה מהירה כדי לראות את מצב החיבור שלהם ולשלוח להם הודעות פרטיות. לפי תמיכת הערכה, הודעות ממשתמשים אלו יכולות גם להיות מודגשות. אם אתה מוסיף משתמש לרשימת הנודניקים שלך, כל ההודעות אשר הוא שולח יוסתרו כברירת מחדל.'
	),
	array(
		0 => 'כיצד אני יכול להוסיף / להסיר משתמשים אל/מתוך רשימת החברים או הנודניקים שלי?',
		1 => 'אתה יכול להוסיף משתמשים לרשימה שלך בשתי דרכים. בתוך כל פרופיל משתמש, ישנו קישור להוספת המשתמש לרשימת החברים או הנודניקים שלך. לחלופין, מלוח הבקרה למשתמש שלך, אתה יכול להוסיף ישירות משתמשים על־ידי הזנת שמות המשתמשים שלהם. אתה יכול גם להסיר משתמשים מהרשימה שלך בעזרת אותו עמוד.'
	),
	array(
		0 => '--',
		1 => 'חיפוש בפורומים'
	),
	array(
		0 => 'כיצד אני יכול לחפש בפורום או בפורומים?',
		1 => 'הזן את החיפוש בתיבת החיפוש הנמצאת בעמוד הראשי, בעמודי הפורום או הנושא. ניתן לגשת לחיפוש המתקדם על־ידי לחיצה על הקישור “חיפוש מתקדם” אשר זמין בכל העמודים בפורום. הדרך לגישה לחיפוש תלויה בעיצוב שבשימוש.'
	),
	array(
		0 => 'מדוע החיפוש שלי לא מחזיר תוצאות?',
		1 => 'Your search was probably too vague and included many common terms which are not indexed by phpBB. Be more specific and use the options available within Advanced search.',
	),
	array(
		0 => 'מדוע החיפוש שלי מחזיר עמוד ריק!?',
		1 => 'החיפוש שלך החזיק יותר מדי תוצאות אשר השרת יכול לבצע. השתמש ב“חיפוש מתקדם” והגדר יותר את התנאים שבשימוש והפורומים בהם אתה מחפש.'
	),
	array(
		0 => 'כיצד אני מחפש משתמשים?',
		1 => 'בקר בעמוד “משתמשים” ולחץ על הקישור “מצא משתמש”.'
	),
	array(
		0 => 'כיצד אני יכול למצוא את ההודעות והנושאים שלי?',
		1 => 'ניתן לאחזר את ההודעות שלך על-ידי לחיצה על הקישור "הצג את ההודעות שלך" בתוך לוח הבקרה למשתמש או על ידי לחיצה על הקישור "חפש את הודעות המשתמש" דרך עמוד הפרופיל שלך או על ידי לחיצה על תפריט "קישורים מהירים" בחלק העליון של כל דף.  כדי לחפש את הנושאים שלך, השתמש בעמוד החיפוש המתקדם ומלא את האפשרויות המתאימות. ',
	),
	array(
		0 => '--',
		1 => 'הרשמות לקבלת עדכונים ומועדפים'
	),
	array(
		0 => 'מה ההבדל בין מועדפים והרשמות לקבלת עדכונים?',
		1 => 'ב-phpBB 3.0, שמירה למועדפים של נושאים עבדה בדומה למועדפים בדפדפן - לא היית מקבל התראות על עדכונים בנושאים. החל מגרסה 3.1, שמירה למועדפים דומה יותר להרשמה לנושא. תוכל לקבל התראות כאשר הנושא מתעדכן. הרשמה לפורום, לעומת זאת, תעדכן אותך כאשר ישר עדכונים לנושא או פורום במערכת. ניתן לשנות את אפשרויות ההתראות למועדפים והרשמות בלוח הבקרה למשתמש, תחת ״העדפות מערכת״.',
	),
	array(
    	0 => 'כיצד אני יכול להוסיף למועדפים או להירשם לנושאים ספציפיים?',
    	1 => 'תוכל להוסיף נושא ספציפי למועדפים או להירשם אליו על ידי לחיצה על הקישור המתאים בתפריט "אפשרויות נושא", הממוקם לנוחותך לצד חלקו העליון והתחתון של דיון בנושא.<br /> תגובה לנושא  כאשר התיבה "הודע לי כאשר תגובה נשלחת" מסומנת גם תרשום אותך לקבל עדכונים מהנושא.',
    ),
	array(
		0 => 'כיצד אני נרשם לפורום מסוים?',
		1 => 'כדי להרשם לפורום מסוים, לחץ על הקישור “הרשם לקבלת עדכונים מפורום זה” בתחתית העמוד לאחר הכניסה לפורום.',
	),
	array(
		0 => 'כיצד אני מסיר את ההרשמות שלי?',
		1 => 'כדי להסיר את ההרשמות שלך, עבור ללוח הבקרה למשתמש שלך ולחץ על הקישורים להרשמות שלך.'
	),
	array(
		0 => '--',
		1 => 'קבצים מצורפים'
	),
	array(
		0 => 'אלו מין קבצים מצורפים ניתנים לצירוף במערכת זו?',
		1 => 'מנהל המערכת רשאי להוסיף ולהוריד אלו סוגי קבצים שברצונו לקבל או לא לקבל למערכת שלו. אם אינך בטוח שניתן להעלות, צור קשר עם אחד ממנהלי המערכת למידע נרחב יותר.'
	),
	array(
		0 => 'כיצד אני מוצא את כל הקבצים המצורפים שלי?',
		1 => 'בכדי למצוא את רשימת הקבצים המצורפים שהעלאת, עבור ללוח הבקרה למשתמש ובחר באפשרות הקבצים המצורפים.'
	),
	array(
		0 => '--',
		1 => 'מערכת phpBB'
	),
	array(
		0 => 'מי תכנן וכתב את מערכת הפורומים?',
		1 => 'תוכנה זו (בצורה הלא ערוכה שלה) נוצרה, שוחררה וזכויותיה הם של <a href="https://www.phpbb.com/">קבוצת phpBB</a>. המערכת נבנתה תחת רישיון חופשי וניתנת לעריכה חופשית ומלאה (GNU-2.0). לפרטים נוספים בקרו בעמוד <a href=“http://phpbb.co.il/about/”>אודות המערכת</a>.',
	),
	array(
		0 => 'מדוע אפשרות X ניתנת?',
		1 => 'המערכת נכתבה וקיבלה רישיון על ידי קבוצת phpBB. אם אתה מאמין שיש אפשרות שצריך להוסיף אנא בקר ב<a href="https://www.phpbb.com/ideas/">מרכז ההצעות של phpBB</a>, שם תוכל להצביע להצעות או להציע הצעות חדשות.'
	),
	array(
		0 => 'למי אני פונה במקרים של חוקתיות ואישורים למערכת?',
		1 => 'לכל מנהל ראשי אשר נמצא בקבוצה הנקראת “הצוות”. הדף יכול לשמש גם עזר להערותיכם. אם אינך מקבל תשובה אתה צריך ליצור קשר עם בעל המתחם (בצע <a href="http://www.google.com/search?q=whois">איתור whois</a>) או, אם המערכת רצה על שירות חינמי (למשל Yahoo!, free.fr, f2s.com, וכד\'), ההנהלה או מחלקת הפגיעות של אותו שירות. שים לב שלקבוצת phpBB <strong>אין לחלוטין סמכות שיפוטית</strong> ואינה יכולה בשום דרך לשאת באחריות לגבי איך, איפה או על־ידי מי מערכת זו בשימוש. אל תצור קשר עם קבוצת phpBB בהקשר לכל חומר לא חוקי אשר <strong>לא קשור באופן ישיר</strong> לאתר phpBB.co.il או המערכת phpBB עצמה בפרט. אם תשלח דואר אלקטרוני לקבוצת phpBB <strong>לגבי כל שימוש בצד שלישי</strong> של מערכת זו, צפה לתשובה מצומצמת או לשום תשובה בכלל.'
		),
	array(
		0 => 'איך אני יוצר קשר עם מנהל הפורומים?',
		1 => 'כל המשתמשים של הפורומים יכולים להשתמש בטופס “יצירת קשר”, אם מנהל הפורומים הפעיל אפשרות זו.<br />משתמשים רשומים יכולים לצפות גם בעמוד “הצוות”.',
	),
	array(
		0 => '--',
		1 => 'קבוצת המתרגמים phpBB הישראלי'
	),
	array(
		0 => 'מי מתרגם את המערכת הזאת?',
		1 => 'המערכת כולה מתורגמת על ידי <a href="http://www.phpbb.co.il/">phpBB - פורומים בעברית</a>.'
	),
	array(
		0 => 'זכר ונקבה במערכת?',
		1 => 'המערכת המתורגמת משתמשת בלשון זכר, אך היא מיועדת לשני המינים. באנגלית אין הבדלים בין המינים ולכן באנגלית אין את המקרה הזה. בעברית משתמשים בלשון זכר כצורה בלתי מוגדרת, שכוללת גם את הנקבה. כל מי שמתנצל על שהוא משתמש בלשון זכר, או שהוא מנסה לעקוף אותה על ידי שימוש בצורות המגוחכות כמו "את/ה" או "אתם", פשוט לא יודע עברית, ועימו הסליחה.'
	),
	array(
		0 => 'הערה בקשר לתרגום?',
		1 => 'על כל בעיה / הערה / הארה, פנה אלינו <a href="http://www.phpbb.co.il/">לפורום התמיכה באתר התרגום</a>.<br />אנא קרא את כללי הפורום לפני שליחת הודעה חדשה.'
	),
	array(
		0 => 'האם ניתן להוריד את הזכויות הנמצאות למטה?',
		1 => 'לא ולא! הרישיון הוא אומנם רישיון חופשי, אך אוסר על הסרת זכויות היוצרים והמתרגמים גם יחד ואין לשנותם. תנו כבוד ליוצרי המערכת ועורכיה.'
	),
);
