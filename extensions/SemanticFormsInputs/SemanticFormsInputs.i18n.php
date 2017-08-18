<?php
/**
 * Language file for Semantic Forms Inputs
 */

$messages = array();

$messages['en'] = array(
	'semanticformsinputs-desc' => 'Additional input types for [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Wrong format.',
	'semanticformsinputs-close' => 'Close',
	'semanticformsinputs-prev' => 'Previous',
	'semanticformsinputs-next' => 'Next',
	'semanticformsinputs-today' => 'Today',
	'semanticformsinputs-dateformatlong' => 'd MM yy', // see http://docs.jquery.com/UI/Datepicker/formatDate
	'semanticformsinputs-dateformatshort' => 'dd/mm/yy', // see http://docs.jquery.com/UI/Datepicker/formatDate
	'semanticformsinputs-firstdayofweek' => '0', // 0 - sunday, 1 - monday...
	'semanticformsinputs-malformedregexp' => 'Malformed regular expression ($1).',

	'semanticformsinputs-datepicker-dateformat' => 'The date format string. See the [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters online documentation] for more information.',
	'semanticformsinputs-datepicker-weekstart' => 'The first day of the week (0 - Sunday, 1 - Monday, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'The first date that can be chosen (in yyyy/mm/dd format).',
	'semanticformsinputs-datepicker-lastdate' => 'The last date that can be chosen (in yyyy/mm/dd format).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'A list of days that can not be selected (e.g. weekend: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'A list of days that shall appear highlighted (e.g. weekend: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'A comma-separated list of disabled dates/date ranges (dates in yyyy/mm/dd format, ranges in yyyy/mm/dd-yyyy/mm/dd format).',
	'semanticformsinputs-datepicker-highlightdates' => 'A comma-separated list of dates/date ranges that shall appear highlighted (dates in yyyy/mm/dd format, ranges in yyyy/mm/dd-yyyy/mm/dd format).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Should week numbers be shown left of the week?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Should the user be able to fill the input field directly or only via the date picker?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Should a reset button be shown? This is the only way for the user to erase the input field if it is disabled for direct input.',
	
	'semanticformsinputs-timepicker-mintime' => 'The earliest time to show. Format: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'The latest time to show. Format: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Interval between minutes. Number between 1 and 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Should the user be able to fill the input field directly or only via the date picker?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Should a reset button be shown? This is the only way for the user to erase the input field if it is disabled for direct input.',
	
	'semanticformsinputs-regexp-regexp' => 'The regular expression the input has to match to be valid. This must be given including the slashes! Defaults to "/.*/", i.e. any value.',
	'semanticformsinputs-regexp-basetype' => 'The base type to be used. May be any input type that generates an html form element of type input or select (e.g. text, listbox, datepicker) or another regexp. Defaults to "text".',
	'semanticformsinputs-regexp-baseprefix' => 'Prefix for the parameters of the base type.',
	'semanticformsinputs-regexp-orchar' => 'The OR-character to be used in the regular expression instead of |. Defaults to "!"',
	'semanticformsinputs-regexp-inverse' => 'If set, the input must NOT match the regular expression to be valid. I.e. the regular expression is inverted.',
	'semanticformsinputs-regexp-message' => 'The error message to be displayed if the match fails. Defaults to "Wrong format!" (or equivalent in the current locale)',

	'semanticformsinputs-menuselect-structure' => 'The menu structure as an unordered list.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Should the user be able to fill the input field directly?',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author F.trott
 * @author Kghbln
 * @author Shirayuki
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'semanticformsinputs-desc' => '{{desc|name=Semantic Forms Inputs|url=http://www.mediawiki.org/wiki/Extension:Semantic_Forms_Inputs}}',
	'semanticformsinputs-wrongformat' => 'Used as error message.',
	'semanticformsinputs-close' => 'Used as label for the "Close" button in the Date picker.
{{Identical|Close}}',
	'semanticformsinputs-prev' => 'Used as label for the "Previous month" button in the Date picker.

See also:
* {{msg-mw|Semanticformsinputs-next}}
{{Identical|Previous}}',
	'semanticformsinputs-next' => 'Used as label for the "Next month" button in the Date picker.

See also:
* {{msg-mw|Semanticformsinputs-prev}}
{{Identical|Next}}',
	'semanticformsinputs-today' => 'Used as label for the "Today" button in the Date picker.
{{Identical|Today}}',
	'semanticformsinputs-dateformatlong' => '{{Optional}}
{{doc-important|This is a machine-readable date format string!| <br>It is used by a function to format a date. It will not be read by a human user. Do not translate each letter literally! Instead insert the date format for your language using the english-based letters. See http://docs.jquery.com/UI/Datepicker/formatDate }}',
	'semanticformsinputs-dateformatshort' => '{{Optional}}
{{doc-important|This is a machine-readable date format string!| <br>It is used by a function to format a date. It will not be read by a human user. Do not translate each letter literally! Instead insert the date format for your language using the english-based letters. See http://docs.jquery.com/UI/Datepicker/formatDate }}',
	'semanticformsinputs-firstdayofweek' => '{{optional}}
0 - sunday, 1 - monday...',
	'semanticformsinputs-malformedregexp' => 'An error message.',
	'semanticformsinputs-datepicker-dateformat' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-weekstart' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-firstdate' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-lastdate' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-disabledates' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-highlightdates' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-showweeknumbers' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-enableinputfield' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-datepicker-showresetbutton' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-timepicker-mintime' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-timepicker-maxtime' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-timepicker-interval' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-timepicker-enableinputfield' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-timepicker-showresetbutton' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-regexp-regexp' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-regexp-basetype' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-regexp-baseprefix' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-regexp-orchar' => 'This is a help text for the [[Special:CreateForm]] page. OR is an operator to handle [[wikipedia:Logical_disjunction|disjunctions]].',
	'semanticformsinputs-regexp-inverse' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-regexp-message' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-menuselect-structure' => 'This is a help text for the [[Special:CreateForm]] page.',
	'semanticformsinputs-menuselect-enableinputfield' => 'This is a help text for the [[Special:CreateForm]] page.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'semanticformsinputs-desc' => 'Ekstra invoertipes vir [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Verkeerde formaat.',
	'semanticformsinputs-close' => 'Sluit',
	'semanticformsinputs-prev' => 'Vorige',
	'semanticformsinputs-next' => 'Volgende',
	'semanticformsinputs-today' => 'Vandag',
);

/** Arabic (العربية)
 * @author OsamaK
 */
$messages['ar'] = array(
	'semanticformsinputs-next' => 'التالي',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'semanticformsinputs-close' => 'ܣܟܘܪ',
	'semanticformsinputs-prev' => 'ܕܩܕܡ',
	'semanticformsinputs-next' => 'ܕܒܬܪ',
	'semanticformsinputs-today' => 'ܝܘܡܢܐ',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'semanticformsinputs-desc' => "Más tribes d'entrada pa los [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Formularios Semánticos]",
	'semanticformsinputs-wrongformat' => 'Formatu incorreutu.',
	'semanticformsinputs-close' => 'Zarrar',
	'semanticformsinputs-prev' => 'Anterior',
	'semanticformsinputs-next' => 'Siguiente',
	'semanticformsinputs-today' => 'Güei',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'semanticformsinputs-next' => 'Növbəti',
	'semanticformsinputs-today' => 'Bu gün',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'semanticformsinputs-desc' => 'Дадатковыя тыпы ўводу для [http://www.mediawiki.org/wiki/Extension:Semantic_Forms сэмантычных формаў]',
	'semanticformsinputs-wrongformat' => 'Няслушны фармат.',
	'semanticformsinputs-close' => 'Закрыць',
	'semanticformsinputs-prev' => 'Папярэдняе',
	'semanticformsinputs-next' => 'Наступнае',
	'semanticformsinputs-today' => 'Сёньня',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author පසිඳු කාවින්ද
 */
$messages['bg'] = array(
	'semanticformsinputs-wrongformat' => 'Грешен формат.',
	'semanticformsinputs-close' => 'Затваряне',
	'semanticformsinputs-prev' => 'Предишна',
	'semanticformsinputs-next' => 'Следваща',
	'semanticformsinputs-today' => 'Днес',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'semanticformsinputs-wrongformat' => 'ভুল বিন্যাস',
	'semanticformsinputs-close' => 'বন্ধ',
	'semanticformsinputs-prev' => 'পূর্ববর্তী',
	'semanticformsinputs-next' => 'পরবর্তী',
	'semanticformsinputs-today' => 'আজ',
);

/** Breton (brezhoneg)
 * @author Gwendal
 * @author Y-M D
 */
$messages['br'] = array(
	'semanticformsinputs-desc' => 'Doareoù moned ouzhpenn evit [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Furmad fall.',
	'semanticformsinputs-close' => 'Serriñ',
	'semanticformsinputs-prev' => 'Kent',
	'semanticformsinputs-next' => "War-lerc'h",
	'semanticformsinputs-today' => 'Hiziv',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'semanticformsinputs-desc' => 'Dodatne vrste unosa za [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantičke forme]',
	'semanticformsinputs-wrongformat' => 'Pogrešan format.',
	'semanticformsinputs-close' => 'Zatvori',
	'semanticformsinputs-prev' => 'Prethodno',
	'semanticformsinputs-next' => 'Slijedeće',
	'semanticformsinputs-today' => 'Danas',
);

/** Catalan (català)
 * @author Toniher
 */
$messages['ca'] = array(
	'semanticformsinputs-desc' => "Tipus d'entrada addicionals per al [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]",
	'semanticformsinputs-wrongformat' => 'Format incorrecte.',
	'semanticformsinputs-close' => 'Tanca',
	'semanticformsinputs-prev' => 'Anterior',
	'semanticformsinputs-next' => 'Següent',
	'semanticformsinputs-today' => 'Avui',
);

/** Czech (česky)
 * @author Reaperman
 */
$messages['cs'] = array(
	'semanticformsinputs-wrongformat' => 'Chybný formát.',
	'semanticformsinputs-close' => 'Zavřít',
	'semanticformsinputs-prev' => 'Předchozí',
	'semanticformsinputs-next' => 'Další',
	'semanticformsinputs-today' => 'Dnes',
);

/** German (Deutsch)
 * @author F.trott
 * @author Kghbln
 */
$messages['de'] = array(
	'semanticformsinputs-desc' => 'Ermöglicht verschiedene zusätzliche Eingabearten für [https://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Falsches Format.',
	'semanticformsinputs-close' => 'Schließen',
	'semanticformsinputs-prev' => 'Voriger Monat',
	'semanticformsinputs-next' => 'Nächster Monat',
	'semanticformsinputs-today' => 'Heute',
	'semanticformsinputs-dateformatlong' => 'd. MM yy',
	'semanticformsinputs-dateformatshort' => 'dd.mm.yy',
	'semanticformsinputs-firstdayofweek' => '1',
	'semanticformsinputs-malformedregexp' => 'Fehlerhafter regulärer Ausdruck ($1)',
	'semanticformsinputs-datepicker-dateformat' => 'Die Zeichenfolge des Datumsformats. Siehe hierzu die [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters Online-Dokumentation] für weitere Informationen.',
	'semanticformsinputs-datepicker-weekstart' => 'Der erste Tag der Woche (0 - Sonntag, 1 - Montag, usw.)',
	'semanticformsinputs-datepicker-firstdate' => 'Das erste auswählbare Datum (im Format JJJJ/MM/TT).',
	'semanticformsinputs-datepicker-lastdate' => 'Das letzte auswählbare Datum (im Format JJJJ/MM/TT).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Eine Liste der Tage, die nicht ausgewählt werden können (z. B. das Wochenende: 6,0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Eine Liste der Tage, die hervorgehoben angezeigt werden sollen (z. B. das Wochenende: 6,0).',
	'semanticformsinputs-datepicker-disabledates' => 'Eine kommagetrennte Liste deaktivierter Tage/Zeiträume (Tage im Format JJJJ/MM/TT, Zeiträume im Format JJJJ/MM/TT-JJJJ/MM/TT).',
	'semanticformsinputs-datepicker-highlightdates' => 'Eine kommagetrennte Liste von Tagen/Zeiträumen, die hervorgehoben angezeigt werden sollen (Tage im Format JJJJ/MM/TT, Zeiträume im Format JJJJ/MM/TT-JJJJ/MM/TT).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Sollen die Wochennummern Links von der Woche angezeigt werden?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Sollen die Benutzer die Eingabefelder direkt bearbeiten können, oder nur über die Datumsauswahl?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Soll eine Schaltfläche zum Zurücksetzen angezeigt werden? Dies ist für die Benutzer die einzige Möglichkeit die Eingabe im Eingabefeld zu entfernen, sofern das direkte Bearbeiten deaktiviert wurde.',
	'semanticformsinputs-timepicker-mintime' => 'Die früheste anzuzeigende Zeit (im Format hh:mm).',
	'semanticformsinputs-timepicker-maxtime' => 'Die späteste anzuzeigende Zeit (im Format hh:mm).',
	'semanticformsinputs-timepicker-interval' => 'Der Intervall zwischen den Minuten (Zahlen zwischen 1 und 60).',
	'semanticformsinputs-timepicker-enableinputfield' => 'Sollen die Benutzer die Eingabefelder direkt bearbeiten können, oder nur über die Datumsauswahl?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Soll eine Schaltfläche zum Zurücksetzen angezeigt werden? Dies ist für die Benutzer die einzige Möglichkeit die Eingabe im Eingabefeld zu entfernen, sofern das direkte Bearbeiten deaktiviert wurde.',
	'semanticformsinputs-regexp-regexp' => 'Der reguläre Ausdruck mit dem die Eingabe übereinstimmen muss, um gültig zu sein. Der Wert muss einschließlich der Schrägstriche angegeben werden. Der Standardwert ist „/.*/“ und bedeutet „alle Werte“.',
	'semanticformsinputs-regexp-basetype' => 'Der Basiseingabetyp der verwendet werden soll. Dies kann jeder Eingabetyp sein, der ein HTML-Formularelement für die Typen Eingabe oder Auswahl generieren kann (z. B. „text“, „listbox“, „datepicker“), oder ein anderer regulärer Ausdruck. Der Standardwert ist „text“.',
	'semanticformsinputs-regexp-baseprefix' => 'Das Präfix für die Parameter des Basiseingabetyps.',
	'semanticformsinputs-regexp-orchar' => 'Das OR-Zeichen, das bei regulären Ausdrücken, anstatt von „|“ verwendet werden soll. Der Standardwert ist „!“.',
	'semanticformsinputs-regexp-inverse' => 'Sofern festgelegt, darf die Eingabe nicht dem regulären Ausdruck entsprechen, um gültig zu sein. Dies bedeutet, dass der reguläre Ausdruck invertiert wird.',
	'semanticformsinputs-regexp-message' => 'Die Fehlermeldung, die angezeigt werden soll, sofern der Vergleich scheitert. Der Standardwert ist „Das Format ist falsch.“, oder das Äquivalent der zutreffenden Übersetzung.',
	'semanticformsinputs-menuselect-structure' => 'Die Menüstruktur als ungeordnete Liste.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Sollen die Benutzer die Eingabefelder direkt bearbeiten können?',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'semanticformsinputs-today' => 'Noroc',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'semanticformsinputs-desc' => 'Pśidatne zapódawańske typy [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Wopacny format',
	'semanticformsinputs-close' => 'Zacyniś',
	'semanticformsinputs-prev' => 'Pjerwjejšny',
	'semanticformsinputs-next' => 'Pśiducy',
	'semanticformsinputs-today' => 'Źinsa',
);

/** Greek (Ελληνικά)
 * @author Protnet
 */
$messages['el'] = array(
	'semanticformsinputs-desc' => 'Επιπρόσθετοι τύποι εισαγωγής δεδομένων για τις [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Σημασιολογικές Φόρμες]',
	'semanticformsinputs-wrongformat' => 'Εσφαλμένη μορφή.',
	'semanticformsinputs-close' => 'Κλείσιμο',
	'semanticformsinputs-prev' => 'Προηγούμενο',
	'semanticformsinputs-next' => 'Επόμενο',
	'semanticformsinputs-today' => 'Σήμερα',
	'semanticformsinputs-malformedregexp' => 'Κακή μορφή κανονικής έκφρασης ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'Η συμβολοσειρά μορφοποίησης ημερομηνίας. Δείτε την [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters ηλεκτρονική τεκμηρίωση] για περισσότερες πληροφορίες.',
	'semanticformsinputs-datepicker-weekstart' => 'Η πρώτη ημέρα της εβδομάδας (0 - Κυριακή, 1 - Δευτέρα, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'Η πρώτη ημερομηνία που μπορεί να επιλεγεί (σε μορφή εεεε/μμ/ηη).',
	'semanticformsinputs-datepicker-lastdate' => 'Η τελευταία ημερομηνία που μπορεί να επιλεγεί (σε μορφή εεεε/μμ/ηη).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Λίστα των ημερών που δεν μπορούν να επιλέγονται (π.χ. Σαββατοκύριακο: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Λίστα των ημερών που θα είναι τονισμένες (π.χ. Σαββατοκύριακο: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Λίστα διαχωρισμένη με κόμματα των απενεργοποιημένων ημερομηνιών/χρονικών περιόδων (ημερομηνίες σε μορφή εεεε/μμ/ηη, χρονικές περίοδοι σε μορφή εεεε/μμ/ηη-εεεε/μμ/ηη).',
	'semanticformsinputs-datepicker-highlightdates' => 'Λίστα διαχωρισμένη με κόμματα των ημερομηνιών/χρονικών περιόδων που θα εμφανίζονται τονισμένες (ημερομηνίες σε μορφή εεεε/μμ/ηη, χρονικές περίοδοι σε μορφή εεεε/μμ/ηη-εεεε/μμ/ηη).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Θέλετε ο αριθμός εβδομάδας να φαίνεται αριστερά της εβδομάδας;',
	'semanticformsinputs-datepicker-enableinputfield' => 'Να μπορεί ο χρήστης να συμπληρώσει το πλαίσιο εισόδου δεδομένων απευθείας ή μόνο μέσω του επιλογέα ημερομηνίας;',
	'semanticformsinputs-datepicker-showresetbutton' => 'Να εμφανίζεται κουμπί επαναφοράς; Αυτός είναι ο μόνος τρόπος για να σβήσει ο χρήστης το πλαίσιο εισαγωγής δεδομένων εάν είναι απενεργοποιημένη η άμεση εισαγωγή.',
	'semanticformsinputs-timepicker-mintime' => 'Η πιο παλιά ώρα που θα εμφανίζεται. Μορφή: ωω:λλ',
	'semanticformsinputs-timepicker-maxtime' => 'Η πιο πρόσφατη ώρα που θα εμφανίζεται. Μορφή: ωω:λλ',
	'semanticformsinputs-timepicker-interval' => 'Χρονικό διάστημα μεταξύ λεπτών. Αριθμός μεταξύ 1 και 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Να μπορεί ο χρήστης να συμπληρώσει το πλαίσιο εισόδου δεδομένων απευθείας ή μόνο μέσω του επιλογέα ημερομηνίας;',
	'semanticformsinputs-timepicker-showresetbutton' => 'Να εμφανίζεται κουμπί επαναφοράς; Αυτός είναι ο μόνος τρόπος για να σβήσει ο χρήστης το πλαίσιο εισαγωγής δεδομένων εάν είναι απενεργοποιημένη η άμεση εισαγωγή.',
	'semanticformsinputs-regexp-regexp' => 'Η κανονική έκφραση που πρέπει να πληρούν τα δεδομένα που εισάγονται για να είναι έγκυρα. Πρέπει να αποδοθεί συμπεριλαμβανομένων των καθέτων! Η προεπιλογή είναι «/.*/», δηλαδή οποιαδήποτε τιμή.',
	'semanticformsinputs-regexp-basetype' => 'Ο βασικός τύπος που θα χρησιμοποιηθεί. Μπορεί να είναι οποιοσδήποτε τύπος εισόδου που παράγει στοιχεία φόρμας html τύπου πλαισίου εισόδου ή τύπου επιλογέα (π.χ. κείμενο, πλαίσιο λίστας, επιλογέας ημερομηνίας) ή μια άλλη κανονική έκφραση. Η προεπιλογή είναι «κείμενο».',
	'semanticformsinputs-regexp-baseprefix' => 'Πρόθεμα για τις παραμέτρους του βασικού τύπου.',
	'semanticformsinputs-regexp-orchar' => 'Ο χαρακτήρας OR που θα χρησιμοποιηθεί στην κανονική έκφραση αντί του |. Η προεπιλογή είναι «!»',
	'semanticformsinputs-regexp-inverse' => 'Αν οριστεί, η είσοδος πρέπει να ΜΗΝ πληροί την κανονική έκφραση για να είναι έγκυρη. Δηλαδή η κανονική έκφραση αντιστρέφεται.',
	'semanticformsinputs-regexp-message' => 'Το μήνυμα λάθους που θα εμφανίζεται εάν δεν πληροίται η κανονική έκφραση. Η προεπιλογή είναι «Εσφαλμένη μορφή!» (ή το ισοδύναμο στη γλώσσα που ορίζεται από τις τοπικές ρυθμίσεις)',
	'semanticformsinputs-menuselect-structure' => 'Η δομή του μενού ως αταξινόμητη λίστα.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Να μπορεί ο χρήστης να συμπληρώσει το πλαίσιο εισόδου δεδομένων απευθείας;',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Danke7
 * @author Translationista
 */
$messages['es'] = array(
	'semanticformsinputs-desc' => 'Tipos de entrada adicionales para [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Formularios Semánticos]',
	'semanticformsinputs-wrongformat' => 'Formato incorrecto.',
	'semanticformsinputs-close' => 'Cerrar',
	'semanticformsinputs-prev' => 'Anterior',
	'semanticformsinputs-next' => 'Siguiente',
	'semanticformsinputs-today' => 'Hoy',
	'semanticformsinputs-malformedregexp' => 'Expresión regular formada incorrectamente ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'La cadena de formato de fecha. Véase la [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters documentación en línea] para obtener más información.',
	'semanticformsinputs-datepicker-weekstart' => 'El primer día de la semana (0 = domingo, 1 = lunes...).',
	'semanticformsinputs-datepicker-firstdate' => 'La primera fecha que se puede elegir (en formato aaaa/mm/dd).',
	'semanticformsinputs-datepicker-lastdate' => 'La última data que se puede elegir (en formato aaaa/mm/dd).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Una lista de días que no se pueden seleccionar (por ejemplo, fin de semana: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Una lista de días que deberían aparecer destacados (por ejemplo, fin de semana: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Una lista de elementos separados por comas de fechas/rangos de fechas deshabilitados (las fechas en formato aaaa/mm/dd, los rangos de fechas en formato aaaa/mm/dd-aaaa/mm/dd).',
	'semanticformsinputs-datepicker-highlightdates' => 'Una lista de elementos separados por comas de fechas/rangos de fechas que deberían aparecer destacados (las fechas en formato aaaa/mm/dd, los rangos de fechas en formato aaaa/mm/dd-aaaa/mm/dd).',
	'semanticformsinputs-datepicker-showweeknumbers' => '¿Deben aparecer los números a la izquierda de la semana?',
	'semanticformsinputs-datepicker-enableinputfield' => '¿Debe ser capaz el usuario de completar el campo de entrada directamente o únicamente a través del selector de fechas?',
	'semanticformsinputs-datepicker-showresetbutton' => '¿Debe mostrarse un botón de restablecimiento (reset)? Este es el único modo que tiene el usuario de limpiar el campo de entrada si está deshabilitado para entrada directa.',
	'semanticformsinputs-timepicker-mintime' => 'La primera hora a mostrar. Formato: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'La última hora a mostrar. Formato: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Intervalo entre los minutos. Número entre 1 y 60.',
	'semanticformsinputs-timepicker-enableinputfield' => '¿Debe ser capaz el usuario de completar el campo de entrada directamente o únicamente a través del selector de fechas?',
	'semanticformsinputs-timepicker-showresetbutton' => '¿Debe mostrarse un botón de restablecimiento (reset)? Este es el único modo que tiene el usuario de limpiar el campo de entrada si está deshabilitado para la entrada directa.',
	'semanticformsinputs-regexp-regexp' => 'La expresión regular que debe respetar la entrada para que sea válida. ¡Debe ser especificada entre barras inclinadas! Por defecto "/.*/", para cualquier valor.',
	'semanticformsinputs-regexp-basetype' => 'El tipo de base a usar. Puede ser cualquier tipo de entrada que genere un elemento de formulario HTML del tipo "input" o "select" (por exemplo, texto, caja de listas, selector de fecha) u otra expresión regular. Por defecto es "texto".',
	'semanticformsinputs-regexp-baseprefix' => 'Prefijo para los parámetros del tipo de base.',
	'semanticformsinputs-regexp-orchar' => 'El carácter "O" a usar en la expresión regular en vez de "|". Por defecto es "!".',
	'semanticformsinputs-regexp-inverse' => 'En caso de estar definida, la entrada NO debe coincidir con la expresión regular para ser válida. Es decir, la expresión regular está invertida.',
	'semanticformsinputs-regexp-message' => 'El mensaje de error a mostrar si falla la coincidencia. Por defecto es "¡Formato incorrecto!" (o una forma equivalente en el idioma local)',
	'semanticformsinputs-menuselect-structure' => 'La estructura del menú como lista no ordenada.',
	'semanticformsinputs-menuselect-enableinputfield' => '¿Debe el usuario ser capaz de completar el campo de entrada directamente?',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'semanticformsinputs-close' => 'Sule',
	'semanticformsinputs-prev' => 'Eelmine',
	'semanticformsinputs-next' => 'Järgmine',
	'semanticformsinputs-today' => 'Täna',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'semanticformsinputs-close' => 'بستن',
	'semanticformsinputs-prev' => 'قبلی',
	'semanticformsinputs-next' => 'بعدی',
	'semanticformsinputs-today' => 'امروز',
);

/** Finnish (suomi)
 * @author Beluga
 * @author Nedergard
 * @author Silvonen
 */
$messages['fi'] = array(
	'semanticformsinputs-desc' => '[http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semanttisten lomakkeiden] lisäsyötetyypit',
	'semanticformsinputs-wrongformat' => 'Väärä muoto.',
	'semanticformsinputs-close' => 'Sulje',
	'semanticformsinputs-prev' => 'Edellinen',
	'semanticformsinputs-next' => 'Seuraava',
	'semanticformsinputs-today' => 'Tänään',
	'semanticformsinputs-malformedregexp' => 'Virheellisesti muodostettu säännöllinen lauseke ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'Päivämäärän muotomerkkijono. Lisätietoja löytyy [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters ohjeesta].',
	'semanticformsinputs-datepicker-weekstart' => 'Viikon ensimmäinen päivä (0 - sunnuntai, 1 - maanantai...).',
	'semanticformsinputs-datepicker-firstdate' => 'Ensimmäinen päivämäärä, joka voidaan valita (muodossa vvvv/kk/pp).',
	'semanticformsinputs-datepicker-lastdate' => 'Viimeinen päivämäärä, joka voidaan valita (muodossa vvvv/kk/pp).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Luettelo päivistä, joita ei voi valita (esim. viikonloppu: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Luettelo päivistä, jotka korostetaan (esim. viikonloppu: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Pilkuilla erottu luettelo kielletyistä päivämäristä/päivämääräalueista (päivämäärät muodossa vvvv/kk/pp, päivämääräalueet muodossa vvvv/kk/pp-vvvv/kk/pp).',
	'semanticformsinputs-datepicker-highlightdates' => 'Pilkuilla erottu luettelo päivämäristä/päivämääräalueista, jotka korostetaan (päivämäärät muodossa vvvv/kk/pp, päivämääräalueet muodossa vvvv/kk/pp-vvvv/kk/pp).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Näytetäänkö viikkonumerot viikon vasemmalla puolella?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Saako käyttäjä syöttää tiedon kirjoittamalla vai vain päimääräpoimijan avulla?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Näytetäänkö "Tyhjennä" -painike? Se on ainoa tapa tyhjentää kentät, jos käyttäjä ei saa kirjoittaa niihin.',
	'semanticformsinputs-timepicker-mintime' => 'Ensimmäinen näytettävä aika. Muoto: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Viimeinen näytettävä aika. Muoto: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Väli minuutteina. Numerot 1 ja 60 välillä.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Saako käyttäjä syöttää tiedon kirjoittamalla vai vain päimääräpoimijan avulla?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Näytetäänkö "Tyhjennä" -painike? Se on ainoa tapa tyhjentää kentät, jos käyttäjä ei saa kirjoittaa niihin.',
	'semanticformsinputs-regexp-baseprefix' => 'Perustyypin parametrien etuliite.',
	'semanticformsinputs-regexp-orchar' => 'Säännöllisessä lausekkeessa |-merkin sijasta käytettävä TAI-merkki. Oletuksena ”!”.',
	'semanticformsinputs-menuselect-structure' => 'Valikkorakenne numeroimattomana luettelona.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Saako käyttäjä kirjoittaa tiedon kenttään?',
);

/** French (français)
 * @author Crochet.david
 * @author F.trott
 * @author Gomoko
 * @author IAlex
 */
$messages['fr'] = array(
	'semanticformsinputs-desc' => "Types d'entrées additionnelles pour [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Formulaires sémantiques]",
	'semanticformsinputs-wrongformat' => 'Format erroné.',
	'semanticformsinputs-close' => 'Fermer',
	'semanticformsinputs-prev' => 'Précédent',
	'semanticformsinputs-next' => 'Suivant',
	'semanticformsinputs-today' => "Aujourd'hui",
	'semanticformsinputs-dateformatshort' => 'dd / mm / yy',
	'semanticformsinputs-malformedregexp' => 'Expression régulière mal formée ($1).',
	'semanticformsinputs-datepicker-dateformat' => "La chaîne de format de date. Voyez la [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters documentation en ligne] pour plus d'information.",
	'semanticformsinputs-datepicker-weekstart' => 'Le premier jour de la semaine (0 - dimanche, 1 - lundi, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'La première date qui peut être choisie (au format aaaa/mm/jj).',
	'semanticformsinputs-datepicker-lastdate' => 'La dernière date qui peut être choisie (au format aaaa/mm/jj).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Une liste de jours qui ne peuvent pas être sélectionnés (par ex. week-end: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Une liste de jours qui doivent apparaître en surbrillance (par ex. week-end: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Une liste séparée par des virgules de plages de date ou dates désactivées (dates au format aaaa/mm/jj, plages au format aaaa/mm/jj-aaaa/mm/jj).',
	'semanticformsinputs-datepicker-highlightdates' => 'Une liste séparée par des virgules de plages de dates ou dates qui doivent apparaître en surbrillance (dates au format aaaa/mm/jj, plages au format aaaa/mm/jj-aaaa/mm/jj).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Les numéros de semaine doivent-ils être affichés à gauche de la semaine ?',
	'semanticformsinputs-datepicker-enableinputfield' => "L'utilisateur doit-il pouvoir remplir le champ d'entrée directement ou seulement par l'intermédiaire du sélecteur de dates?",
	'semanticformsinputs-datepicker-showresetbutton' => "Faut-il afficher un bouton de réinitialisation? C'est la seule manière pour l'utilisateur d'effacer le champ d'entrée s'il est désactivé pour la saisie directe.",
	'semanticformsinputs-timepicker-mintime' => 'Le premier horaire à afficher. Format: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Le dernier horaire à afficher. Format: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Intervalle entre les minutes. Nombre entre 1 et 60.',
	'semanticformsinputs-timepicker-enableinputfield' => "L'utilisateur doit-il pouvoir remplir le champ d'entrée directement ou seulement par l'intermédiaire du sélecteur de dates?",
	'semanticformsinputs-timepicker-showresetbutton' => "Faut-il afficher un bouton de réinitialisation? C'est la seule manière pour l'utilisateur d'effacer le champ d'entrée s'il est désactivé pour la saisie directe.",
	'semanticformsinputs-regexp-regexp' => "L'expression régulière que l'entrée doit respecter pour être valide. Cela doit comprendre les barres obliques ! Par défaut, \"/.*/\", c'est-à-dire n'importe quelle valeur.",
	'semanticformsinputs-regexp-basetype' => 'Le type de base à utiliser. Peut être n\'importe quel type d\'entrée qui génère un élément de formulaire html de type input ou select (par ex., texte, liste déroulante, sélecteur de date) ou une autre expression régulière. Par défaut, "texte".',
	'semanticformsinputs-regexp-baseprefix' => 'Préfixe pour les paramètres du type de base.',
	'semanticformsinputs-regexp-orchar' => 'Le caractère OU à utiliser dans l\'expression régulière au lieu de |. Par défaut, "!"',
	'semanticformsinputs-regexp-inverse' => "S'il est activé, l'entrée ne doit PAS correspondre à l'expression régulière pour être valide. C'est-à-dire que l'expression régulière est inversée.",
	'semanticformsinputs-regexp-message' => "Le message d'erreur à afficher si la correspondance échoue. Par défaut, «Format incorrect!» (ou l'équivalent dans la langue locale)",
	'semanticformsinputs-menuselect-structure' => 'La structure du menu sous forme de liste non ordonnée.',
	'semanticformsinputs-menuselect-enableinputfield' => "L'utilisateur doit-il pouvoir remplir le champ d'entrée directement?",
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'semanticformsinputs-wrongformat' => 'Crouyo format.',
	'semanticformsinputs-close' => 'Cllôre',
	'semanticformsinputs-prev' => 'Devant',
	'semanticformsinputs-next' => 'Aprés',
	'semanticformsinputs-today' => 'Houé',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'semanticformsinputs-close' => 'Dún',
	'semanticformsinputs-prev' => 'Siar',
	'semanticformsinputs-next' => 'Ar aghaidh',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'semanticformsinputs-desc' => 'Tipos de entrada adicionais para os [http://www.mediawiki.org/wiki/Extension:Semantic_Forms formularios semánticos]',
	'semanticformsinputs-wrongformat' => 'Formato incorrecto.',
	'semanticformsinputs-close' => 'Pechar',
	'semanticformsinputs-prev' => 'Anterior',
	'semanticformsinputs-next' => 'Seguinte',
	'semanticformsinputs-today' => 'Hoxe',
	'semanticformsinputs-malformedregexp' => 'Expresión regular formada incorrectamente ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'A cadea de formato de data. Olle a [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters documentación en liña] para obter máis información.',
	'semanticformsinputs-datepicker-weekstart' => 'O primeiro día da semana (0 = domingo, 1 = luns...).',
	'semanticformsinputs-datepicker-firstdate' => 'A primeira data que se pode elixir (en formato aaa/mm/dd).',
	'semanticformsinputs-datepicker-lastdate' => 'A última data que se pode elixir (en formato aaa/mm/dd).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Unha lista de días que non se poden seleccionar (por exemplo, fin de semana: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Unha lista de días que deberían aparecer destacados (por exemplo, fin de semana: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Unha lista de elementos separados por comas de rangos de data ou datas desactivados (datas en formato aaaa/mm/dd, rangos en formato aaaa/mm/dd-aaaa/mm/dd).',
	'semanticformsinputs-datepicker-highlightdates' => 'Unha lista de elementos separados por comas de rangos de data ou datas que deberían aparecer destacados (datas en formato aaaa/mm/dd, rangos en formato aaaa/mm/dd-aaaa/mm/dd).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Deben aparecer os números á esquerda da semana?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Debe o usuario ser capaz de encher o campo de entrada directamente ou unicamente a través do selector de datas?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Debe mostrarse un botón de restablecemento? Este é o único xeito que o usuario ten de limpar o campo de entrada se está desactivado para a entrada directa.',
	'semanticformsinputs-timepicker-mintime' => 'A primeira hora a mostrar. Formato: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'A última hora a mostrar. Formato: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Intervalo entre os minutos. Número entre 1 e 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Debe o usuario ser capaz de encher o campo de entrada directamente ou unicamente a través do selector de datas?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Debe mostrarse un botón de restablecemento? Este é o único xeito que o usuario ten de limpar o campo de entrada se está desactivado para a entrada directa.',
	'semanticformsinputs-regexp-regexp' => 'A expresión regular que debe coincidir coa entrada para que sexa válida. Cómpre especificala coas barras inclunadas! Por defecto "/.*/", para calquera valor.',
	'semanticformsinputs-regexp-basetype' => 'O tipo de base a usar. Pode ser calquera tipo de entrada que xere un elemento de formulario HTML do tipo "input" ou "select" (por exemplo, texto, caixa de listas, selector de data) ou outra expresión regular. Por defecto é "texto".',
	'semanticformsinputs-regexp-baseprefix' => 'Prefixo para os parámetros do tipo de base.',
	'semanticformsinputs-regexp-orchar' => 'O carácter OU a usar na expresión regular no canto de "|". Por defecto é "!".',
	'semanticformsinputs-regexp-inverse' => 'En caso de estar definida, a entrada NON debe coincidir coa expresión regular para ser válida. Por exemplo, se a expresión regular está invertida.',
	'semanticformsinputs-regexp-message' => 'A mensaxe de erro a mostrar se falla a coincidencia. Por defecto é "Formato incorrecto!" (ou a forma equivalente na lingua local)',
	'semanticformsinputs-menuselect-structure' => 'A estrutura do menú como lista non ordenada.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Debe o usuario ser capaz de encher o campo de entrada directamente?',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'semanticformsinputs-desc' => 'Mecht zuesätzligi Arte vu Yygabe megli fir [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Falsch Format.',
	'semanticformsinputs-close' => 'Zuemache',
	'semanticformsinputs-prev' => 'Vorigi',
	'semanticformsinputs-next' => 'Negschti',
	'semanticformsinputs-today' => 'Hit',
);

/** Hebrew (עברית)
 * @author YaronSh
 */
$messages['he'] = array(
	'semanticformsinputs-desc' => 'סוגי קלט נוספים עבור [http://www.mediawiki.org/wiki/Extension:Semantic_Forms טפסים סמנטיים]',
	'semanticformsinputs-wrongformat' => 'מבנה שגוי.',
	'semanticformsinputs-close' => 'סגירה',
	'semanticformsinputs-prev' => 'הקודם',
	'semanticformsinputs-next' => 'הבא',
	'semanticformsinputs-today' => 'היום',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'semanticformsinputs-desc' => 'Přidatne zapodawanske typy za [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Wopačny format',
	'semanticformsinputs-close' => 'Začinić',
	'semanticformsinputs-prev' => 'Předchadny',
	'semanticformsinputs-next' => 'Přichodny',
	'semanticformsinputs-today' => 'Dźensa',
	'semanticformsinputs-malformedregexp' => 'Njepłaćiwy regularny wuraz ($1)',
	'semanticformsinputs-datepicker-dateformat' => 'Rjećazk znamjškow za datumowy format. Hlej [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters online-dokumentaciju]',
	'semanticformsinputs-datepicker-weekstart' => 'Prěni dźeń tydźenja (0 - njedźela, 1 - póndźela, ...)',
	'semanticformsinputs-datepicker-firstdate' => 'Prěni datum, kotryž da so wubrać (we formaće JJJJ/MM/TT).',
	'semanticformsinputs-datepicker-lastdate' => 'Posledni datum, kotryž da so wubrać (we formaće JJJJ/MM/TT).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Lisćina dnjow, kotrež njedadźa so wurać (na př. kónc tydźenja: 6.0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Lisćina dnjow, kotrež maja so jako wuzběhnjene zwobraznić (na př. kónc tydźenja: 6.0).',
	'semanticformsinputs-datepicker-disabledates' => 'Lisćina přez komu dźělenych znjemóžnjenych datumow/datumowych wobłukow (datumy we formaće JJJJ/MM/TT, datumowe wobłuki we formaće JJJJ/MM/TT-JJJJ/MM/TT).',
	'semanticformsinputs-datepicker-highlightdates' => 'Lisćina přez komu dźělenych znjemóžnjenych datumow/datumowych wobłukow, kotrež maja so wuzběhnjene jewić (datumy we formaće JJJJ/MM/TT, datumowe wobłuki we formaće JJJJ/MM/TT-JJJJ/MM/TT).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Maja tydźenjowe čisła nalěwo pódla tydźenja pokazać?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Ma wužiwar móc zapodawanske polo direktnje wupjelnić abo jenož přez datumowy wuběr?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Ma so tłóčatko za wróćostajenje pokazać? To je jenička móžnosć za wužiwarja, zo by zapodawanske polo wuprózdnił, jeli je za direktne zapodaće zawrjene.',
	'semanticformsinputs-timepicker-mintime' => 'Najzažniši čas, kotryž ma so pokazać. Format: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Najpózdźiši čas, kotryž ma so pokazać. Format: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Interwal mjez mjeńšinami. Ličba mjez 1 a 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Ma wužiwar móc zapodawanske polo direktnje wupjelnić abo jenož přez datumowy wuběr?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Ma so tłóčatko za wróćostajenje pokazać? To je jenička móžnosć za wužiwarja, zo by zapodawanske polo wuprózdnił, jeli je za direktne zapodaće zawrjene.',
	'semanticformsinputs-regexp-regexp' => 'Regularny wuraz zapodaća, z kotrymž zapodaće dyrbi so kryć, zo by płaćiwy był. Hódnota dyrbi so z nakósnymaj smužkomaj podać. Standard je "/.*/", t.r. někajka hódnota.',
	'semanticformsinputs-regexp-basetype' => 'Zakładny typ, kotryž ma so wužiwać. To móže kóždy zapodawanski typ być, kotryž móže element HTML-formulara typa zapodaće płodźić abo wubrać (na př. text, listbox, datepicker) abo někajki druhi regularny wuraz. Standard je "text".',
	'semanticformsinputs-regexp-baseprefix' => 'Prefiks za parametry zakładneho typa.',
	'semanticformsinputs-regexp-orchar' => 'OR-znamješko, kotrež ma so w regularnym wurazu město | pokazać. Standard je "!".',
	'semanticformsinputs-regexp-inverse' => 'Jeli to je nastajene, zapodaće njesmě regularnemu wurazej wotpowědać, zo by płaćiwe było. To rěka, zo regularny wuraz so wobroći.',
	'semanticformsinputs-regexp-message' => 'Zmylkowa zdźělenka, kotraž ma so zwobraznić, jeli přirunanje so njeporadźi. Standard je "Wopačny format!" (abo něšto podobne w přełožku).',
	'semanticformsinputs-menuselect-structure' => 'Menijowa struktura jako naličenje.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Ma wužiwar zapodawanske polo direktnje móc wupjelnić?',
);

/** Hungarian (magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'semanticformsinputs-wrongformat' => 'Hibás formátum.',
	'semanticformsinputs-close' => 'Bezárás',
	'semanticformsinputs-prev' => 'Előző',
	'semanticformsinputs-next' => 'Következő',
	'semanticformsinputs-today' => 'Ma',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'semanticformsinputs-desc' => 'Additional typos de entrata pro [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Formularios Semantic]',
	'semanticformsinputs-wrongformat' => 'Formato incorrecte.',
	'semanticformsinputs-close' => 'Clauder',
	'semanticformsinputs-prev' => 'Precedente',
	'semanticformsinputs-next' => 'Sequente',
	'semanticformsinputs-today' => 'Hodie',
	'semanticformsinputs-malformedregexp' => 'Expression regular mal formate ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'Le specification del formato del data. Vide le [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters documentation in linea] pro plus information.',
	'semanticformsinputs-datepicker-weekstart' => 'Le prime die del septimana (0 - dominica, 1 - lunedi, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'Le prime data que pote esser seligite (in formato aaaa/mm/dd).',
	'semanticformsinputs-datepicker-lastdate' => 'Le ultime data que pote esser seligite (in formato aaaa/mm/dd).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Un lista de dies que non pote esser seligite (p.ex. fin de septimana: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Un lista de dies que debe apparer in forma accentuate (p.ex. fin de septimana: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Un lista separate per commas de datas disactivate, o intervallos de datas disactivate (datas in formato aaaa/mm/dd, intervallos in formato aaaa/mm/dd-aaaa/mm/dd).',
	'semanticformsinputs-datepicker-highlightdates' => 'Un lista separate per commas de datas o intervallos de datas que debe apparer in forma accentuate (datas in formato aaaa/mm/dd, intervallos in formato aaaa/mm/dd-aaaa/mm/dd).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Monstrar le numeros de septimana a sinistra del septimana?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Debe le usator poter plenar le campo de entrata directemente o solmente via le selector de data?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Monstrar un button de reinitialisation? Isto es le sol maniera in que le usator pote rader le campo de entrata si illo es disactivate pro entrata directe.',
	'semanticformsinputs-timepicker-mintime' => 'Le prime hora a monstrar. Formato: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Le ultime hora a monstrar. Formato: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Intervallo inter minutas. Numero inter 1 e 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Debe le usator poter plenar le campo de entrata directemente o solmente via le selector de data?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Monstrar un button de reinitialisation? Isto es le sol maniera in que le usator pote rader le campo de entrata si illo es disactivate pro entrata directe.',
	'semanticformsinputs-regexp-regexp' => 'Le expression regular a que le entrata debe corresponder pro esser valide. Isto debe esser specificate includente le barras oblique! Le predefinition es "/.*/", i.e. omne valor.',
	'semanticformsinputs-regexp-basetype' => 'Le typo de base a usar. Pote esser omne typo de entrata que genera un elemento de formulario HTML del typo "input" o "select" (p.ex. texto, quadro de lista, selector de data) o un altere expression regular. Le predefinition es "text".',
	'semanticformsinputs-regexp-baseprefix' => 'Prefixo pro le parametros del typo de base.',
	'semanticformsinputs-regexp-orchar' => 'Le character pro separar alternativas a usar in le expression regular in loco de "|". Le predefinition es "!".',
	'semanticformsinputs-regexp-inverse' => 'Si definite, le entrata NON debe corresponder al expression regular pro esser valide. Isto vole dicer, le expression regular es invertite.',
	'semanticformsinputs-regexp-message' => 'Le message de error a presentar in caso de non-correspondentia. Le predefinition es "Formato incorrecte!" (o le equivalente in le lingua actualmente configurate)',
	'semanticformsinputs-menuselect-structure' => 'Le structura de menu como un lista non ordinate.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Debe le usator poter plenar le campo de entrata directemente?',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 * @author IvanLanin
 */
$messages['id'] = array(
	'semanticformsinputs-desc' => 'Jenis masukan tambahan untuk [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Format salah.',
	'semanticformsinputs-close' => 'Penutup',
	'semanticformsinputs-prev' => 'Sebelumnya',
	'semanticformsinputs-next' => 'Selanjutnya',
	'semanticformsinputs-today' => 'Hari ini',
);

/** Italian (italiano)
 * @author Beta16
 * @author F. Cosoleto
 */
$messages['it'] = array(
	'semanticformsinputs-wrongformat' => 'Formato errato.',
	'semanticformsinputs-close' => 'Chiudi',
	'semanticformsinputs-prev' => 'Precedente',
	'semanticformsinputs-next' => 'Successivo',
	'semanticformsinputs-today' => 'Oggi',
	'semanticformsinputs-malformedregexp' => 'Espressione regolare mal formattata ($1).',
	'semanticformsinputs-datepicker-weekstart' => 'Il primo giorno della settimana (0 - domenica, 1 - lunedì, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'La prima data che può essere scelta (in formato aaaa/mm/gg).',
	'semanticformsinputs-datepicker-lastdate' => "L'ultima data che può essere scelta (in formato aaaa/mm/gg).",
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Un elenco di giorni che non può essere selezionato (ad esempio il fine settimana: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Un elenco dei giorni da far apparire evidenziati (per esempio il fine settimana: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Un elenco di date/intervalli di date separate da una virgola (le date nel formato aaaa/mm/gg, gli intervalli nel formato aaaa/mm/gg-aaaa/mm/gg).',
	'semanticformsinputs-datepicker-highlightdates' => 'Un elenco di date/intervalli di date che saranno mostrate evidenziate (le date nel formato aaaa/mm/gg, gli intervalli nel formato aaaa/mm/gg-aaaa/mm/gg).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'I numeri delle settimane dovrebbero essere mostrati a sinistra della settimana?',
	'semanticformsinputs-datepicker-enableinputfield' => "L'utente dovrebbe essere in grado di immettere manualmente la data o dovrebbe farlo solo attraverso la selezione?",
	'semanticformsinputs-datepicker-showresetbutton' => "Dovrebbe essere mostrato un pulsante di reset? Questo sarebbe il solo modo che avrebbe l'utente di cancellare il campo se l'immissione manuale è disabilitata.",
);

/** Japanese (日本語)
 * @author Shirayuki
 * @author Yanajin66
 * @author 青子守歌
 */
$messages['ja'] = array(
	'semanticformsinputs-desc' => ' [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]のための追加の入力タイプ',
	'semanticformsinputs-wrongformat' => '間違った形式です。',
	'semanticformsinputs-close' => '閉じる',
	'semanticformsinputs-prev' => '前へ',
	'semanticformsinputs-next' => '次へ',
	'semanticformsinputs-today' => '今日',
	'semanticformsinputs-dateformatlong' => 'yy年mm月dd日',
	'semanticformsinputs-dateformatshort' => 'yy/mm/dd',
	'semanticformsinputs-datepicker-dateformat' => '日付の書式の文字列です。詳細情報は[http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters オンライン ドキュメント]を参照してください。',
	'semanticformsinputs-datepicker-weekstart' => '週の初日の曜日 (0: 日曜日、1: 月曜日、...)',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'semanticformsinputs-wrongformat' => 'არასწორი ფორმატი.',
	'semanticformsinputs-close' => 'დახურვა',
	'semanticformsinputs-prev' => 'წინა',
	'semanticformsinputs-next' => 'შემდეგი',
	'semanticformsinputs-today' => 'დღეს',
	'semanticformsinputs-datepicker-weekstart' => 'კვირის პირველი დღე (0 - კვირა, 1 - ორშაბათი, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'პირველი თარიღი, რომელიც შეიძლება აირჩეს (წწწწ/თთ/დდ ფორმატით).',
	'semanticformsinputs-datepicker-lastdate' => 'ბოლო თარიღი, რომელიც შეიძლება აირჩეს (წწწწ/თთ/დდ ფორმატით).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'დღეების სია რომელთა არჩევა ვერ მოხერხდება (მაგ. დასვენების დღეები: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'დღეების სია რომლებიც უნდა ჩანდნენ (მაგ. დასვენების დღეები: 6, 0).',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'semanticformsinputs-close' => 'បិទ',
	'semanticformsinputs-prev' => 'មុន',
	'semanticformsinputs-next' => 'បន្ទាប់',
	'semanticformsinputs-today' => 'ថ្ងៃនេះ',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'semanticformsinputs-wrongformat' => '잘못된 형식입니다.',
	'semanticformsinputs-close' => '닫기',
	'semanticformsinputs-prev' => '이전',
	'semanticformsinputs-next' => '다음',
	'semanticformsinputs-today' => '오늘',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'semanticformsinputs-desc' => 'Zohsäzlejje Zoote Einjabe för „[http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantesch Fommulaare]“.',
	'semanticformsinputs-wrongformat' => 'Dat Fommaat es verkiehrt',
	'semanticformsinputs-close' => 'Zohmaache',
	'semanticformsinputs-prev' => 'Vörijje',
	'semanticformsinputs-next' => 'Nächste',
	'semanticformsinputs-today' => 'Hück',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'semanticformsinputs-today' => 'Îro',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'semanticformsinputs-desc' => "Zousätzlech Manéieren fir d'Eraginn fir [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Formulairen]",
	'semanticformsinputs-wrongformat' => 'Falsche Format.',
	'semanticformsinputs-close' => 'Zoumaachen',
	'semanticformsinputs-prev' => 'Vireg',
	'semanticformsinputs-next' => 'Nächst',
	'semanticformsinputs-today' => 'Haut',
	'semanticformsinputs-datepicker-weekstart' => 'Den éischten Dag vun der Woch (0 - Sonndeg, 1 - Méindeg, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'Den éischten Datum deen erausgesicht ka ginn (am Format JJJJ/MM/DD)',
	'semanticformsinputs-datepicker-lastdate' => 'De leschten Datum deen erausgesicht ka ginn (am Format JJJJ/MM/DD)',
	'semanticformsinputs-timepicker-mintime' => 'Déi fréisten Zäit déi gewise gëtt. Format: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Déi spéitsten Zäit déi gewise gëtt: Format: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Intervall tëschent de Minutten. Zuel tëschent 1 a 60.',
	'semanticformsinputs-menuselect-structure' => "D'Struktur vum Menü als net zortéiert Lëscht.",
	'semanticformsinputs-menuselect-enableinputfield' => "Soll et dem Benotzer méiglech si fir d'Feld direkt auszefëllen?",
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author F.trott
 */
$messages['mk'] = array(
	'semanticformsinputs-desc' => 'Дополнителни типови на внос за [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Семантички обрасци]',
	'semanticformsinputs-wrongformat' => 'Погрешен формат.',
	'semanticformsinputs-close' => 'Затвори',
	'semanticformsinputs-prev' => 'Претходно',
	'semanticformsinputs-next' => 'Следно',
	'semanticformsinputs-today' => 'Денес',
	'semanticformsinputs-malformedregexp' => 'Погрешно срочен регуларен израз ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'Низа за датумски формат. За повеќе информации, погледајте ја [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters документацијата].',
	'semanticformsinputs-datepicker-weekstart' => 'Прв ден во седмицата (0 - недела, 1 - понеделник, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'Првиот датум што ќе може да се избере (во форматот гггг/мм/дд).',
	'semanticformsinputs-datepicker-lastdate' => 'Последниот датум што може да се обере (во форматот гггг/мм/дд).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Список на денови што не можат да се одберат (на пр. викенд, 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Список на денови што ќе се истакнуваат (на пр. викенд, 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Список на оневозможени датуми/датумски опсези, одделени со запирка (датуми во форматот гггг/мм/дд, опсези во форматот гггг/мм/дд-гггг/мм/дд).',
	'semanticformsinputs-datepicker-highlightdates' => 'Список на датуми/датумски опсези одделени со запирка кои ќе се прикажуваат истакнати, т.е. обележани (датуми во форматот гггг/мм/дд, опсези во форматот гггг/мм/дд-гггг/мм/дд).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Дали лево од седмиците да стојат броеви (на седмици)?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Дали корисникот да може да го пополни полето за внос директно или преку одбирачот на датуми?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Дали да се прикажува копчето „одново“? Ова е единствениот начин корисникот да го избрише внесеното во полето ако за тоа поле е оневозможен директниот внос.',
	'semanticformsinputs-timepicker-mintime' => 'Најрано време за приказ. Формат: чч:мм',
	'semanticformsinputs-timepicker-maxtime' => 'Последно време за приказ. Формат: чч:мм',
	'semanticformsinputs-timepicker-interval' => 'Интервал помеѓу минутите. Број помеѓу 1 и 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Дали корисникот да може да го пополни полето за внос директно или преку одбирачот на датуми?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Дали да се прикажува копчето „одново“? Ова е единствениот начин корисникот да го избрише внесеното во полето ако за тоа поле е оневозможен директниот внос.',
	'semanticformsinputs-regexp-regexp' => 'Регуларниот израз на вносот мора да се совпаѓа за да биде важечки. Мора да се внесе заедно со косите црти. По основно: „/.*/“, т.е. било која вредност.',
	'semanticformsinputs-regexp-basetype' => 'Основен тип за употреба. Може да биде било кој тип на внос што создава html-елемент за образец од типот на внос или одбирање (на пр. текст, список, одбирач на датум) или некој друг регуларен израз. По основно: „текст“.',
	'semanticformsinputs-regexp-baseprefix' => 'Префикс за параметрите од основен тип.',
	'semanticformsinputs-regexp-orchar' => 'Знакот за ИЛИ што ќе се користи во регуларниот израз наместо |. По основно „!“',
	'semanticformsinputs-regexp-inverse' => 'Ако е зададено, вносот НЕ смее да се совпаѓа со регуларниот израз за да биде важечки, т.е. регуларниот израз станува обратен.',
	'semanticformsinputs-regexp-message' => 'Пораката за грешка што ќе се прикаже ако нема совпаѓање. По основно: „Погрешен формат!“',
	'semanticformsinputs-menuselect-structure' => 'Состав на менито како неподреден список.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Дали корисникот да може директно да го пополни полето за внос?',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'semanticformsinputs-close' => 'അടയ്ക്കുക',
	'semanticformsinputs-prev' => 'മുൻപത്തേത്',
	'semanticformsinputs-next' => 'അടുത്തത്',
	'semanticformsinputs-today' => 'ഇന്ന്',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'semanticformsinputs-prev' => 'Sebelumnya',
	'semanticformsinputs-next' => 'Berikutnya',
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Event
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'semanticformsinputs-desc' => 'Ekstra inndatatyper for [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Feil format.',
	'semanticformsinputs-close' => 'Lukk',
	'semanticformsinputs-prev' => 'Forrige',
	'semanticformsinputs-next' => 'Neste',
	'semanticformsinputs-today' => 'I dag',
	'semanticformsinputs-malformedregexp' => 'Feilutformet regulæruttrykk: $1',
	'semanticformsinputs-datepicker-dateformat' => 'Datoformatstreng. Se [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters online documentation] for nærmere informasjon.',
	'semanticformsinputs-datepicker-weekstart' => 'Første ukedag (0 - søndag, 1 - mandag, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'Første valgbare dato (med "yyyy/mm/dd"-format).',
	'semanticformsinputs-datepicker-lastdate' => 'Siste valgbare dato (med "yyyy/mm/dd"-format).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Liste av dager som ikke kan velges (f. eks. helg: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Liste av dager som skal fremheves (f. eks. helg: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Komma-separert liste av skjulte datoer/datobaserte tidsrom (datoer gitt i "yyyy/mm/dd"-format, tidsrom i "yyyy/mm/dd-yyyy/mm/dd"-format).',
	'semanticformsinputs-datepicker-highlightdates' => 'En komma-separert liste av datoer eller tidsrom mellom datoer som skal vises uthevet (datoer i formatet yyyy/mm/dd, tidsrom i formatet yyyy/mm/dd-yyyy/mm/dd).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Skal ukenumre vises til venstre for ukene?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Skal brukeren kunne fylle ut datofeltet direkte eller bare via datovelgeren?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Skal en tilbakestillingsknapp vises? Dette vil da være eneste muligheten for en bruker å kunne slette inndatafeltet hvis det er blokkert for direkte innskriving.',
	'semanticformsinputs-timepicker-mintime' => 'Tidligste tidspunkt som vises. Format: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Seneste tidspunkt som vises. Format: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'Intervall mellom minutter. Tall mellom 1 og 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Skal brukeren kunne fylle ut datofeltet direkte eller bare via datovelgeren?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Skal en tilbakestillingsknapp vises? Dette vil da være eneste muligheten for en bruker å kunne slette inndatafeltet hvis det er blokkert for direkte innskriving.',
	'semanticformsinputs-regexp-regexp' => 'Regulæruttrykket som et inndatafelt må oppfylle for å være gyldig. Dette må angis inklusive skråstrek-tegnene! Standard er "/.*/", dvs. vilkårlig verdi.',
	'semanticformsinputs-regexp-basetype' => 'Basistypen som skal brukes. Denne kan være en hvilken som helst type som genererer et HTML-skjemaelement av type "input" eller "select" (f. eks. tekst, listeboks, datavelger) eller annet regulæruttrykk. Standard er "tekst".',
	'semanticformsinputs-regexp-baseprefix' => 'Prefiks for basistype-parametrene.',
	'semanticformsinputs-regexp-orchar' => 'ELLER-tegnet som kan bruker i et regulæruttrykk istedenfor |. Standard er "!".',
	'semanticformsinputs-regexp-inverse' => 'Hvis valgt, skal inndata IKKE oppfylle regulæruttrykket for å være gyldig. Dvs. regulæruttrykket er invertert.',
	'semanticformsinputs-regexp-message' => 'Feilmeldingen som vises hvis betingelsen ikke oppfylles. Standardverdi er "Feil format!"',
	'semanticformsinputs-menuselect-structure' => 'Menystrukturen som en unummerert liste.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Skal brukeren kunne fylle ut inndatafeltet direkte?',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Saruman
 * @author Siebrand
 */
$messages['nl'] = array(
	'semanticformsinputs-desc' => 'Extra invoertypen voor [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Onjuiste opmaak.',
	'semanticformsinputs-close' => 'Sluiten',
	'semanticformsinputs-prev' => 'Vorige',
	'semanticformsinputs-next' => 'Volgende',
	'semanticformsinputs-today' => 'Vandaag',
	'semanticformsinputs-malformedregexp' => 'Ongeldige reguliere expressie ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'De datumopmaak. Zie de [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters online documentatie] voor meer informatie.',
	'semanticformsinputs-datepicker-weekstart' => 'De eerste dag van de week (0: zondag, 1: maandag, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'De eerste datum die gekozen kan worden (in de opmaak jjjj/mm/dd).',
	'semanticformsinputs-datepicker-lastdate' => 'De laatste datum die gekozen kan worden (in de opmaak jjjj/mm/dd).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Een lijst van dagen die niet kunnen worden geselecteerd (bijvoorbeeld weekend: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Een lijst van dagen die gemarkeerd worden (bijvoorbeeld weekend: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => "Een door komma's gescheiden lijst van uitgeschakelde datums of datumreeksen (datums in de opmaak jjjj/mm/dd, reeksen in de opmaak jjjj/mm/dd-jjjj/mm/dd).",
	'semanticformsinputs-datepicker-highlightdates' => "Een door komma's gescheiden lijst van datums of datumreeksen die gemarkeerd worden (datums in de opmaak jjjj/mm/dd formaat, reeksen in de opmaak jjjj/mm/dd-jjjj/mm/dd).",
	'semanticformsinputs-datepicker-showweeknumbers' => 'Weeknummers links van de week weergeven?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Kan de gebruiker het invoerveld rechtstreeks bewerken, of alleen via de datumkiezer?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Knop voor leegmaken weergeven? Dit is de enige manier voor de gebruiker om het invoerveld te wissen als directe invoer voor het veld is uitgeschakeld.',
	'semanticformsinputs-timepicker-mintime' => 'De vroegste tijd om weer te geven. Opmaak: uu:mm',
	'semanticformsinputs-timepicker-maxtime' => 'De laatste tijd om weer te geven. Opmaak: uu:mm.',
	'semanticformsinputs-timepicker-interval' => 'Interval tussen minuten. Getal tussen 1 en 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Kan de gebruiker het invoerveld rechtstreeks bewerken, of alleen via de datumkiezer?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Knop voor leegmaken weergeven? Dit is de enige manier voor de gebruiker om het invoerveld te wissen als directe invoer voor het veld is uitgeschakeld.',
	'semanticformsinputs-regexp-regexp' => 'De reguliere expressie waarmee de invoer moet overeenkomen om geldig te zijn. Dit moet worden opgegeven met inbegrip van de schraptekens (slashes)! Standaard ingesteld op "/. * /", ofwel een willekeurige waarde.',
	'semanticformsinputs-regexp-basetype' => 'Het basistype dat moet worden gebruikt. Dit kan elk invoertype zijn dat een HTML-formulierelement van het type "input" of "select" (bijvoorbeeld "text", "listbox" of "datepicker") of een andere reguliere expressie genereert. Standaard ingesteld op "text".',
	'semanticformsinputs-regexp-baseprefix' => 'Voorvoegsel voor de parameters van het basistype.',
	'semanticformsinputs-regexp-orchar' => 'Het OR-teken ("of") dat in de reguliere expressie wordt gebruikt in plaats van |. Standaard ingesteld op "!"',
	'semanticformsinputs-regexp-inverse' => 'Als dit is ingesteld moet de invoer NIET overeen komen met de reguliere expressie om geldig te zijn. Dat wil zeggen, de reguliere expressie is omgekeerd.',
	'semanticformsinputs-regexp-message' => 'Het foutbericht dat moet worden weergegeven als het vergelijken mislukt. De standaardinstelling is "Verkeerde opmaak!" (of het equivalent in de geldende landinstelling).',
	'semanticformsinputs-menuselect-structure' => 'De menustructuur als een ongeordende lijst.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Moet de gebruiker het invoerveld rechtstreeks kunnen invullen?',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'semanticformsinputs-next' => 'Neegschte',
);

/** Pälzisch (Pälzisch)
 * @author Xqt
 */
$messages['pfl'] = array(
	'semanticformsinputs-prev' => 'Voriche',
	'semanticformsinputs-next' => 'Negschte',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'semanticformsinputs-desc' => 'Dodatkowe typy wejściowe dla [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Formularzy Semantycznych]',
	'semanticformsinputs-wrongformat' => 'Niewłaściwy format.',
	'semanticformsinputs-close' => 'Zamknij',
	'semanticformsinputs-prev' => 'Poprzednie',
	'semanticformsinputs-next' => 'Następne',
	'semanticformsinputs-today' => 'Dziś',
	'semanticformsinputs-malformedregexp' => 'Nieprawidłowe wyrażenie regularne ( $1 ).',
	'semanticformsinputs-datepicker-weekstart' => 'Pierwszy dzień tygodnia (0 - niedziela, 1 - poniedziałek,...).',
	'semanticformsinputs-datepicker-firstdate' => 'Pierwsza data, która może zostać wybrana (w formacie rrrr/mm/dd).',
	'semanticformsinputs-datepicker-lastdate' => 'Ostatnia data, która może zostać wybrana (w formacie rrrr/mm/dd).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Wykaz dni, które nie mogą zostać wybrane (np. weekendowe: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Wykaz dni, które jest powinny być podświetlone (np. weekendowe: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Rozdzielana przecinkami lista dat/zakresy dat (daty w formacie rrrr/mm/dd, zakresy w formacie rrrr/mm/dd-rrrr/mm/dd).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Czy pokazywać numer tygodnia na lewo od tygodnia?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Czy użytkownik ma prawo wprowadzić dane bezpośrednio w pole, czy tylko przy użyciu kalendarzyka?',
	'semanticformsinputs-timepicker-mintime' => 'Najwcześniejszy czas do wyświetlenia. Format: gg:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Najpóźniejszy czas do wyświetlenia. Format: gg:mm',
	'semanticformsinputs-timepicker-interval' => 'Interwał między minutami. Liczba między 1 i 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Czy użytkownik ma możliwość bezpośredniego wpisania daty, czy tylko przez kalendarzyk?',
	'semanticformsinputs-regexp-orchar' => 'Znak LUB stosowany w wyrażeniu regularnym zamiast |. Domyślnie "!"',
	'semanticformsinputs-menuselect-structure' => 'Struktura menu jako lista nieuporządkowana.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Czy użytkownik może bezpośrednio wprowadzać zawartość pola?',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'semanticformsinputs-desc' => "Sòrt d'intrade adissionaj për [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Formolari Semàntich]",
	'semanticformsinputs-wrongformat' => 'Formà pa bon.',
	'semanticformsinputs-close' => 'Sara',
	'semanticformsinputs-prev' => 'Prima',
	'semanticformsinputs-next' => 'Apress',
	'semanticformsinputs-today' => 'Ancheuj',
	'semanticformsinputs-malformedregexp' => 'Espression regolar malformà ($1).',
	'semanticformsinputs-datepicker-dateformat' => "La stringa ëd formà ëd data. Ch'a vëdda la [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters documentassion an linia] për savèjne ëd pi.",
	'semanticformsinputs-datepicker-weekstart' => 'Ël prim di dla sman-a (0 - Dumìnica, 1 - Lùn-es, ...).',
	'semanticformsinputs-datepicker-firstdate' => "La prima data ch'a peul esse sërnùa (ant ël formà aaaa/mm/dd).",
	'semanticformsinputs-datepicker-lastdate' => "L'ùltima data ch'a peul esse sërnùa (ant ël formà aaaa/mm/dd).",
	'semanticformsinputs-datepicker-disabledaysofweek' => "Na lista ëd di ch'a peulo pa esse selessionà (për esempi fin dë sman-a: 6, 0).",
	'semanticformsinputs-datepicker-highlightdaysofweek' => "na lista ëd di ch'a apariran evidensià (për esempi fin dë sman-a: 6, 0).",
	'semanticformsinputs-datepicker-disabledates' => "Na lista separà da vìrgole d'antërvaj ëd date disabilità (date ant ël formà aaaa/mm/dd, antërvaj ant ël formà aaaa/mm/dd-aaaa/mm/dd).",
	'semanticformsinputs-datepicker-highlightdates' => "Na lista separà da vìrgole d'antërvaj ëd date o ëd dàite ch'a apariran evidensià (date ant ël formà aaaa/mm/dd, antërvaj ant ël formà aaaa/mm/dd-aaaa/mm/dd).",
	'semanticformsinputs-datepicker-showweeknumbers' => 'Ij nùmer dë sman-a a devo esse mostrà a snistra dla sman-a?',
	'semanticformsinputs-datepicker-enableinputfield' => "L'utent a dev podèj compilé ël camp d'anseriment diretament o mach con ël selessionator ëd dàite?",
	'semanticformsinputs-datepicker-showresetbutton' => "A venta smon-e un boton d'anulament? A l'é la sola manera për l'utent d'anulé ël camp d'anseriment se a l'é disabilità për l'anseriment diret.",
	'semanticformsinputs-timepicker-mintime' => 'Ël prim orari da smon-e. Formà: oo:mm',
	'semanticformsinputs-timepicker-maxtime' => "L'ùltim orari da smon-e. Formà: oo:mm",
	'semanticformsinputs-timepicker-interval' => 'Antërval antra le minute. Nùmer tra 1 e 60.',
	'semanticformsinputs-timepicker-enableinputfield' => "L'utent a dev podèj compilé ël camp d'anseriment diretament o mach con ël selessionator ëd dàite?",
	'semanticformsinputs-timepicker-showresetbutton' => "A venta smon-e un boton d'anulament? A l'é la sola manera për l'utent d'anulé ël camp d'anseriment se a l'é disabilità për l'anseriment diret.",
	'semanticformsinputs-regexp-regexp' => 'L\'espression regolare che l\'anseriment a dev rëspeté për esse bon. Sòn a dev comprende le sbare obliche! Predefinì a "/.*/", visadì qualsëssìa valor.',
	'semanticformsinputs-regexp-basetype' => "La sòrt ëd base da dovré. A peul esse qualsëssìa sòrt d'anseriment ch'a génera n'element ëd formolari html ëd sòrt anseriment o selession (visadì test, lista dësrolanta, seletor ëd dàite) o n'àutra espression regolar. Predefinì a «test».",
	'semanticformsinputs-regexp-baseprefix' => 'Prefiss për ël paràmetr dla sòrt ëd base.',
	'semanticformsinputs-regexp-orchar' => "Ël caràter O da dovré ant n'espression regolar nopà che |. Predefinì a «!»",
	'semanticformsinputs-regexp-inverse' => "Se ampostà, l'anseriment a dev NEN corisponde a l'espression regolar për esse bon. Visadì l'espression regolar a l'é anvërtìa.",
	'semanticformsinputs-regexp-message' => "Ël mëssagi d'eror da smon-e se la corëspondensa a faliss. Predefinì a «Formà cioch!» (o l'equivalent ant la lenga local)",
	'semanticformsinputs-menuselect-structure' => 'La strutura dlë mnù sot forma ëd lista nen ordinà.',
	'semanticformsinputs-menuselect-enableinputfield' => "L'utent a dev podèj compilé ël camp d'anseriment diretament?",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'semanticformsinputs-close' => 'تړل',
	'semanticformsinputs-prev' => 'پخوانی',
	'semanticformsinputs-next' => 'راتلونکی',
	'semanticformsinputs-today' => 'نن',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'semanticformsinputs-desc' => 'Tipos de entrada adicionais para [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Formulários Semânticos]',
	'semanticformsinputs-wrongformat' => 'Formato incorrecto.',
	'semanticformsinputs-close' => 'Fechar',
	'semanticformsinputs-prev' => 'Anterior',
	'semanticformsinputs-next' => 'Seguinte',
	'semanticformsinputs-today' => 'Hoje',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'semanticformsinputs-desc' => 'Tipos de entrada adicionais para [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Formulários Semânticos]',
	'semanticformsinputs-wrongformat' => 'Formato incorreto.',
	'semanticformsinputs-close' => 'Fechar',
	'semanticformsinputs-prev' => 'Anterior',
	'semanticformsinputs-next' => 'Seguinte',
	'semanticformsinputs-today' => 'Hoje',
);

/** Romanian (română)
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'semanticformsinputs-today' => 'Astăzi',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'semanticformsinputs-desc' => 'Tipe de input aggiundive pe le [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Module Semandece]',
	'semanticformsinputs-wrongformat' => 'Formate sbagliate',
	'semanticformsinputs-close' => 'Chiude',
	'semanticformsinputs-prev' => 'Precedende',
	'semanticformsinputs-next' => 'Prossime',
	'semanticformsinputs-today' => 'Osce',
);

/** Russian (русский)
 * @author Eleferen
 * @author F.trott
 * @author MaxSem
 * @author Pastakhov
 * @author Александр Сигачёв
 * @author Сrower
 */
$messages['ru'] = array(
	'semanticformsinputs-desc' => 'Дополнительные входящие типы для [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Семантических Форм]',
	'semanticformsinputs-wrongformat' => 'Неверный формат.',
	'semanticformsinputs-close' => 'Закрыть',
	'semanticformsinputs-prev' => 'Предыдущая',
	'semanticformsinputs-next' => 'Следующая',
	'semanticformsinputs-today' => 'Сегодня',
	'semanticformsinputs-firstdayofweek' => '1',
	'semanticformsinputs-malformedregexp' => 'Неверно сформированное регулярное выражение ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'Строка формата даты. Смотрите [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters онлайн документацию] для получения дополнительной информации.',
	'semanticformsinputs-datepicker-weekstart' => 'Первый день недели (0 - воскресенье, 1 - понедельник,...).',
	'semanticformsinputs-datepicker-firstdate' => 'Первая дата, которая может быть выбрана (в формате yyyy/mm/dd).',
	'semanticformsinputs-datepicker-lastdate' => 'Последняя дата, которая может быть выбрана (в формате yyyy/mm/dd).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Список дней, которые не могут быть выбраны (например, выходные: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'Список дней, которые должны подсвечиваться (например, выходные: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'Разделенный запятыми список отключенных дат/диапазонов дат (даты в формате гггг/мм/дд, диапазоны в формате гггг/мм/дд-гггг/мм/дд).',
	'semanticformsinputs-datepicker-highlightdates' => 'Разделенный запятыми список дат/диапазонов дат, которые должны быть выделены (даты в формате гггг/мм/дд, диапазоны в формате гггг/мм/дд-гггг/мм/дд).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Номера недель показывать с левой стороны?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Пользователь может заполнить поле ввода напрямую или только через поле выбора даты?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Должна ли отображаться кнопка сброса? Для пользователя это единственная возможность очистить поле ввода, если отключен непосредственный ввод данных.',
	'semanticformsinputs-timepicker-mintime' => 'Самое раннее время, которое будет отображено. Формат: чч:мм',
	'semanticformsinputs-timepicker-maxtime' => 'Самое позднее время, которое будет отображено. Формат: чч:мм',
	'semanticformsinputs-timepicker-interval' => 'Интервал между минутами. Число от 1 до 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Пользователь может заполнить поле ввода напрямую или только через поле выбора даты?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Должна ли отображаться кнопка сброса? Для пользователя это единственная возможность очистить поле ввода, если отключен непосредственный ввод данных.',
	'semanticformsinputs-regexp-regexp' => 'Регулярное выражение, которому должно соответствовать значение поля ввода. Оно должно содержать слэши! По умолчанию "/.*/", т.е. любое значение.',
	'semanticformsinputs-regexp-basetype' => 'Базовый тип, который будет использоваться. Может быть любым типом элемента input или select html-формы (например: text, listbox, datepicker) или другой regexp. По умолчанию "text".',
	'semanticformsinputs-regexp-baseprefix' => 'Префикс для параметров базового типа.',
	'semanticformsinputs-regexp-orchar' => 'ИЛИ-символ, который используется в регулярном выражении вместо |. По умолчанию «!»',
	'semanticformsinputs-regexp-inverse' => 'Если задано, входные данные не должны соответствовать регулярному выражению. Т.е. регулярное выражение инвертируется.',
	'semanticformsinputs-regexp-message' => 'Отображаемое сообщение об ошибке, если сопоставление потерпит неудачу. По умолчанию "Wrong format!" (или эквивалент для текущей локали)',
	'semanticformsinputs-menuselect-structure' => 'Структура меню в виде неупорядоченного списка.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Позволить непосредственное заполнение поля ввода пользователем?',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'semanticformsinputs-wrongformat' => 'වැරදි ආකෘතිය.',
	'semanticformsinputs-close' => 'වසන්න',
	'semanticformsinputs-prev' => 'පෙර',
	'semanticformsinputs-next' => 'මීළඟ',
	'semanticformsinputs-today' => 'අද',
	'semanticformsinputs-malformedregexp' => 'විකෘති වූ ක්‍රමික උච්චාරණය ($1).',
	'semanticformsinputs-datepicker-weekstart' => 'සතියේ පළමු දිනය (0 - ඉරිදා, 1 - සඳුදා, ...).',
	'semanticformsinputs-datepicker-firstdate' => '(in yyyy/mm/dd ආකෘතියෙන්) පළමු දිනය තෝරාගත හැකියි.',
	'semanticformsinputs-datepicker-lastdate' => '(yyyy/mm/dd ආකෘතියෙන්) අවසන් දිනය තෝරාගත හැකියි.',
	'semanticformsinputs-timepicker-mintime' => 'පෙන්වීමට ඇති වේලාසනම කාලය. ආකෘතිය: hh:mm',
	'semanticformsinputs-timepicker-maxtime' => 'පෙන්වීමට ඇති නවතම කාලය. ආකෘතිය: hh:mm',
	'semanticformsinputs-timepicker-interval' => 'මිනිත්තු අතර විරාම කාලය. 1 සහ 60 අතර අංකයක්.',
	'semanticformsinputs-regexp-baseprefix' => 'පාදක වර්ගයේ පරාමිතීන් සඳහා උපසර්ගය.',
	'semanticformsinputs-menuselect-structure' => 'නිප්පටිපාටිගත ලයිස්තුවක් ලෙස මෙනුවේ ව්‍යුහය.',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'semanticformsinputs-dateformatlong' => 'd MM yy',
	'semanticformsinputs-dateformatshort' => 'dd.mm.yy',
	'semanticformsinputs-firstdayofweek' => '1',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'semanticformsinputs-dateformatlong' => 'd MM yy',
	'semanticformsinputs-dateformatshort' => 'dd.mm.yy',
	'semanticformsinputs-firstdayofweek' => '1',
);

/** Swedish (svenska)
 * @author Martinwiss
 */
$messages['sv'] = array(
	'semanticformsinputs-desc' => 'Ännu mer indata-typer för [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]',
	'semanticformsinputs-wrongformat' => 'Fel format.',
	'semanticformsinputs-close' => 'Stäng',
	'semanticformsinputs-prev' => 'Föregående',
	'semanticformsinputs-next' => 'Nästa',
	'semanticformsinputs-today' => 'Idag',
	'semanticformsinputs-malformedregexp' => 'Felaktig regexp ($1)',
	'semanticformsinputs-datepicker-dateformat' => 'Format för datum. Se [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters online documentation] för ytterligare information.',
	'semanticformsinputs-datepicker-weekstart' => 'Första dagen i veckan (0 - söndag, 1 - måndag, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'Första datum som kan väljas (i formatet åååå/mm/dd).',
	'semanticformsinputs-datepicker-lastdate' => 'Sista datum som kan väljas (i formatet åååå/mm/dd).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'En lista med dagar som inte kan väljas (t.ex. helgen: 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => 'En lista med dagar som ska framhävas (t.ex. helgen: 6, 0).',
	'semanticformsinputs-datepicker-disabledates' => 'En kommaseparerad lista med obrukbara datum/datumintervall (datum i formatet åååå/mm/dd, datumintervall i formatet åååå/mm/dd-åååå/mm/dd).',
	'semanticformsinputs-datepicker-highlightdates' => 'En kommaseparerad lista med datum/datumintervall som ska framhävas (datum i formatet åååå/mm/dd, datumintervall i formatet åååå/mm/dd-åååå/mm/dd).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Ska veckonummer visas till vänster om veckan?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Ska användaren kunna fylla i indata-fältet direkt eller enbart via datumväljaren?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Ska det finnas en återställningsknapp? En sådan knapp är enda sättet att radera innehållet i indata-fältet om det inte är tillåtet att skriva i det.',
	'semanticformsinputs-timepicker-mintime' => 'Den tidigaste tiden som visas. Formatet: tt:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Den senaste tiden som visas: Formatet: tt:mm',
	'semanticformsinputs-timepicker-interval' => 'Intervall mellan minuter. Nummer mellan 1 och 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Ska användaren kunna fylla i indata-fältet direkt, eller enbart med hjälp av datumväljaren.',
	'semanticformsinputs-timepicker-showresetbutton' => 'Ska en återställningsknapp visas? Det här är enda sättet att radera innehållet i indata-fältet om det inte är tillåtet att skriva i det.',
	'semanticformsinputs-regexp-regexp' => 'Det reguljära uttryck som indatan måste motsvara för att godkännas. Även snedstreck måste anges! Förvalt innehåll är "/.*/", d.v.s. vilket värde som helst.',
	'semanticformsinputs-regexp-basetype' => 'Bas-typen som ska användas. Måste vara någon indata-typ som skapar en "HTML-form-tagg", såsom "input" eller "select" (d.v.s. text, listbox, datepicker) eller ett annat reguljärt uttryck. Förvalt värde är "text".',
	'semanticformsinputs-regexp-baseprefix' => 'Prefix för parametrar av bas-typen.',
	'semanticformsinputs-regexp-orchar' => 'Det tecken som ska motsvara ELLER i det reguljära uttrycket istället för tecknet |. Förvalt tecken är "!".',
	'semanticformsinputs-regexp-inverse' => 'Indata får INTE motsvara det reguljära uttrycket. D.v.s. det reguljära uttrycket är inverterat.',
	'semanticformsinputs-regexp-message' => 'Felmeddelandet som ska visas om matchningen misslyckas. Förvalt värde är "Fel format!".',
	'semanticformsinputs-menuselect-structure' => 'Menystrukturen är en onumrerad lista.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Ska användaren kunna fylla i indata-fältet direkt?',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'semanticformsinputs-close' => 'மூடுக',
	'semanticformsinputs-prev' => 'முந்தைய',
	'semanticformsinputs-next' => 'அடுத்தது',
	'semanticformsinputs-today' => 'இன்று',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'semanticformsinputs-close' => 'మూసివేయి',
	'semanticformsinputs-prev' => 'గత',
	'semanticformsinputs-next' => 'తదుపరి',
	'semanticformsinputs-today' => 'ఈరోజు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'semanticformsinputs-desc' => 'Karagdagang mga tipo ng pagpasok para sa [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Anyong Semantiko]',
	'semanticformsinputs-wrongformat' => 'Maling anyo.',
	'semanticformsinputs-close' => 'Isara',
	'semanticformsinputs-prev' => 'Nakaraan',
	'semanticformsinputs-next' => 'Susunod',
	'semanticformsinputs-today' => 'Ngayon',
	'semanticformsinputs-dateformatlong' => 'a BB tt',
	'semanticformsinputs-dateformatshort' => 'aa/bb/tt',
	'semanticformsinputs-firstdayofweek' => '0',
	'semanticformsinputs-malformedregexp' => 'Karaniwang pagsasaad na may masamang anyo ($1).',
	'semanticformsinputs-datepicker-dateformat' => 'Ang bagting ng kaanyuan ng petsa. Tingnan ang [http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters dokumentasyong nasa Internet] para sa mas marami pang impormasyon.',
	'semanticformsinputs-datepicker-weekstart' => 'Ang unang araw ng linggo (0 - Linggo, 1 - Lunes, ...).',
	'semanticformsinputs-datepicker-firstdate' => 'Ang unang petsa na mapipili (na nasa anyong tttt/bb/aa).',
	'semanticformsinputs-datepicker-lastdate' => 'Ang huling petsa na mapipili (na nasa anyong tttt/bb/aa).',
	'semanticformsinputs-datepicker-disabledaysofweek' => 'Isang listahan ng mga araw na hindi maaaring piliin (halimbawa na ang Sabado\'t Linggo" 6, 0).',
	'semanticformsinputs-datepicker-highlightdaysofweek' => "Isang listahan ng mga araw na lilitaw na maliwanag (halimbawa na ang Sabado't Linggo: 6, 0).",
	'semanticformsinputs-datepicker-disabledates' => 'Isang listahan ng hindi pinagaganang mga petsa/mga nasasakalawang petsa na pinaghihiwalay ng kuwit (mga petsa na nasa anyong tttt/bb/aa, mga saklaw na nasa anyong tttt/bb/aa-tttt/bb/aa).',
	'semanticformsinputs-datepicker-highlightdates' => 'Isang listahan ng hindi pinagaganang mga petsa/mga nasasakalawang petsa na lilitaw na maliwanag (mga petsa na nasa anyong tttt/bb/aa, mga saklaw na nasa anyong tttt/bb/aa-tttt/bb/aa).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Dapat bang ipakita ang mga bilang ng linggo na nasa kaliwa ng linggo?',
	'semanticformsinputs-datepicker-enableinputfield' => 'Dapat ba na ang tagagamit ay tuwirang makakagawa ng pagpupuno sa hanay ng pagpapasok o sa pamamagitan lamang ng pampili ng petsa?',
	'semanticformsinputs-datepicker-showresetbutton' => 'Dapat bang ipakita ang isang pindutan ng muling pagtatakda? Ito lamang ang paraan para sa tagagamit upang mabura ang hanay ng pagpapasok kung hindi ito pinagagana para sa tuwirang pagpapasok.',
	'semanticformsinputs-timepicker-mintime' => 'Ang pinaka maagang oras na ipapakita. Anyo: oo:mm',
	'semanticformsinputs-timepicker-maxtime' => 'Ang pinaka huling oras na ipapakita: Anyo: oo:mm',
	'semanticformsinputs-timepicker-interval' => 'Agwat sa pagitan ng mga minuto. Bilang sa pagitan ng 1 at 60.',
	'semanticformsinputs-timepicker-enableinputfield' => 'Dapat ba na ang tagagamit ay tuwirang makakagawa ng pagpupuno sa hanay ng pagpapasok o sa pamamagitan lamang ng pampili ng petsa?',
	'semanticformsinputs-timepicker-showresetbutton' => 'Dapat bang ipakita ang isang pindutan ng muling pagtatakda? Ito lamang ang paraan para sa tagagamit upang mabura ang hanay ng pagpapasok kung hindi ito pinagagana para sa tuwirang pagpapasok.',
	'semanticformsinputs-regexp-regexp' => 'Ang karaniwang pagsasaad na dapat tugmain ng lahok upang maging katanggap-tanggap. Dapat itong ibigay na kasama ang mga sakyod! Likas na nakatakda sa "/.*/", iyong anumang halaga.',
	'semanticformsinputs-regexp-basetype' => 'Ang uri ng saligang gagamitin. Maaaring maging anumang uri ng pagpapasok na lumilikha ng isang elemento ng pormularyo ng html ng lahok na uri o pinili (iyong teksto, kahong listahan, pampili ng petsa) o iba pang karaniwang pagsasaad. Likas na nakatakda sa "teksto".',
	'semanticformsinputs-regexp-baseprefix' => 'Unlapi para sa mga parametro ng uri ng saligan.',
	'semanticformsinputs-regexp-orchar' => 'Ang panitik na O na gagamitin sa loob ng karaniwang pagsasaad sa halip na |. Likas na nakatakda sa "!"',
	'semanticformsinputs-regexp-inverse' => 'Kung nakatakda, ang lahok ay HINDI dapat tumugma sa karaniwang pagsasaad upang maging katanggap-tanggap. Iyong nakabaligtad ang karaniwang pagsasaad.',
	'semanticformsinputs-regexp-message' => 'Ang ipapakitang mensahe ng kamalian kung nabigo ang pagtutugma. Likas na nakatakda sa "Maling kaanyuan!" (o katumbas sa loob ng pangkasalukuyang lugar)',
	'semanticformsinputs-menuselect-structure' => 'Ang kayarian ng menu bilang isang listahang walang pagkakasunud-sunod.',
	'semanticformsinputs-menuselect-enableinputfield' => 'Dapat ba na ang tagagamit ay tuwirang makakagawa ng pagpupuno sa hanay ng pagpapasok?',
);

/** Turkish (Türkçe)
 * @author Suelnur
 */
$messages['tr'] = array(
	'semanticformsinputs-today' => 'Bugün',
);

/** Ukrainian (українська)
 * @author Base
 * @author Тест
 */
$messages['uk'] = array(
	'semanticformsinputs-desc' => 'Додаткові типи вводу для [http://www.mediawiki.org/wiki/Extension:Semantic_Forms Семантичних форм]',
	'semanticformsinputs-wrongformat' => 'Неправильний формат.',
	'semanticformsinputs-close' => 'Закрити',
	'semanticformsinputs-prev' => 'Попередня',
	'semanticformsinputs-next' => 'Наступна',
	'semanticformsinputs-today' => 'Сьогодні',
	'semanticformsinputs-malformedregexp' => 'Неправильний регулярний вираз ($1).',
	'semanticformsinputs-datepicker-showweeknumbers' => 'Показувати номери тижнів ліворуч від тижнів?',
	'semanticformsinputs-menuselect-structure' => 'Структура меню у вигляді невпорядкованого списку.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'semanticformsinputs-wrongformat' => 'Định dạng sai',
	'semanticformsinputs-close' => 'Đóng',
	'semanticformsinputs-prev' => 'Trước',
	'semanticformsinputs-next' => 'Sau',
	'semanticformsinputs-today' => 'Hôm nay',
);

/** Yiddish (ייִדיש)
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'semanticformsinputs-close' => 'שליסן',
	'semanticformsinputs-today' => 'הײַנט',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liangent
 * @author Linforest
 */
$messages['zh-hans'] = array(
	'semanticformsinputs-desc' => '用于[http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]的附加输入项类型',
	'semanticformsinputs-wrongformat' => '格式错误。',
	'semanticformsinputs-close' => '关闭',
	'semanticformsinputs-prev' => '向前',
	'semanticformsinputs-next' => '下一个',
	'semanticformsinputs-today' => '今天',
	'semanticformsinputs-malformedregexp' => '格式错误的正则表达式（$1）。',
	'semanticformsinputs-datepicker-dateformat' => '日期格式字符串。详情请参见[http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters 在线文档]。',
	'semanticformsinputs-datepicker-weekstart' => '一周的第一天（0-星期日，1-星期一 ……）。',
	'semanticformsinputs-datepicker-firstdate' => '可选择的第一个日期（采用 dd/yyyy/mm 格式）。',
	'semanticformsinputs-datepicker-lastdate' => '可选择的最后日期（采用 dd/yyyy/mm 格式）。',
	'semanticformsinputs-datepicker-disabledaysofweek' => '不可选择的日子列表（比如，周末：6、 0）。',
	'semanticformsinputs-datepicker-highlightdaysofweek' => '应当高亮显示的日子列表（比如，周末：6、 0）。',
	'semanticformsinputs-datepicker-disabledates' => '已禁用的逗号分隔型日期列表/日期范围（日期采用yyyy/mm/dd格式，日期范围采用yyyy/mm/dd-yyyy/mm/dd格式）。',
	'semanticformsinputs-datepicker-highlightdates' => '应当高亮显示的逗号分隔型日期列表/日期范围（日期采用yyyy/mm/dd格式，日期范围采用yyyy/mm/dd-yyyy/mm/dd格式）。',
	'semanticformsinputs-datepicker-showweeknumbers' => '周数应当显示在相应周的左侧吗？',
	'semanticformsinputs-datepicker-enableinputfield' => '用户究竟应当能够直接填写输入文本框，还是只能借助于日期选取器？',
	'semanticformsinputs-datepicker-showresetbutton' => '是否应当显示一个重置按钮？如果禁止直接输入，这将是用户删除输入文本框的唯一方法。',
	'semanticformsinputs-timepicker-mintime' => '要显示的最早时间。格式：hh:mm',
	'semanticformsinputs-timepicker-maxtime' => '要显示的最晚时间。格式：hh:mm',
	'semanticformsinputs-timepicker-interval' => '分钟之间的间隔。1 和 60 之间的数字。',
	'semanticformsinputs-timepicker-enableinputfield' => '用户究竟应当能够直接填写输入文本框，还是只能借助于日期选取器？',
	'semanticformsinputs-timepicker-showresetbutton' => '是否应当显示一个重置按钮？如果禁止直接输入，这将是用户删除输入文本框的唯一方法。',
	'semanticformsinputs-regexp-regexp' => '输入所必须匹配的正则表达式必须有效。给出时必须包括那些斜杠！默认值为"/.*/"，即任何取值。',
	'semanticformsinputs-regexp-basetype' => '所要使用的基本类型。可以是任何的输入类型产生输入、选择（如文本框、 列表框、日期选取器）或别的类型的html表单元素。默认值为"text"。',
	'semanticformsinputs-regexp-baseprefix' => '基本类型参数的前缀。',
	'semanticformsinputs-regexp-orchar' => '正则表达式当中所要使用的逻辑或字符，而不是“|”。默认值为"!"。',
	'semanticformsinputs-regexp-inverse' => '如果加以设置，输入要有效的话，不得与正则表达式相匹配。也就是说，正则表达式是倒转的。',
	'semanticformsinputs-regexp-message' => '匹配失败时所要显示的错误信息。默认值为"格式错误！"（或者是当前区域的等效取值）。',
	'semanticformsinputs-menuselect-structure' => '作为无序列表的菜单结构。',
	'semanticformsinputs-menuselect-enableinputfield' => '用户是否应该能够直接填写输入文本框？',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Mark85296341
 */
$messages['zh-hant'] = array(
	'semanticformsinputs-desc' => '用於[http://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms]的附加輸入項類型',
	'semanticformsinputs-wrongformat' => '格式不正確。',
	'semanticformsinputs-close' => '關閉',
	'semanticformsinputs-prev' => '上一個',
	'semanticformsinputs-next' => '下一個',
	'semanticformsinputs-today' => '今天',
	'semanticformsinputs-malformedregexp' => '格式錯誤的正則表達式（$1）。',
	'semanticformsinputs-datepicker-dateformat' => '日期格式字符串。詳情請參見[http://www.mediawiki.org/w/index.php?title=Extension:Semantic_Forms_Inputs&fromsection=Date_picker#Parameters 在線文檔]。',
	'semanticformsinputs-datepicker-weekstart' => '一周的第一天（0-星期日，1-星期一 ……）。',
	'semanticformsinputs-datepicker-firstdate' => '可選擇的第一個日期（採用 dd/yyyy/mm 格式）。',
	'semanticformsinputs-datepicker-lastdate' => '可選擇的最後日期（採用 dd/yyyy/mm 格式）。',
	'semanticformsinputs-datepicker-disabledaysofweek' => '不可選擇的日子列表（比如，周末：6、 0）。',
	'semanticformsinputs-datepicker-highlightdaysofweek' => '應當高亮顯示的日子列表（比如，周末：6、 0）。',
	'semanticformsinputs-datepicker-disabledates' => '已禁用的逗號分隔型日期列表/日期範圍（日期採用yyyy/mm/dd格式，日期範圍採用yyyy/mm/dd-yyyy/mm/dd格式）。',
	'semanticformsinputs-datepicker-highlightdates' => '應當高亮顯示的逗號分隔型日期列表/日期範圍（日期採用yyyy/mm/dd格式，日期範圍採用yyyy/mm/dd-yyyy/mm/dd格式）。',
	'semanticformsinputs-datepicker-showweeknumbers' => '周數應當顯示在相應周的左側嗎？',
	'semanticformsinputs-datepicker-enableinputfield' => '用戶究竟應當能夠直接填寫輸入文本框，還是只能藉助於日期選取器？',
	'semanticformsinputs-datepicker-showresetbutton' => '是否應當顯示一個重置按鈕？如果禁止直接輸入，這將是用戶刪除輸入文本框的唯一方法。',
	'semanticformsinputs-timepicker-mintime' => '要顯示的最早時間。格式：hh:mm',
	'semanticformsinputs-timepicker-maxtime' => '要顯示的最晚時間。格式：hh:mm',
	'semanticformsinputs-timepicker-interval' => '分鐘之間的間隔。1 和 60 之間的數字。',
	'semanticformsinputs-timepicker-enableinputfield' => '用戶究竟應當能夠直接填寫輸入文本框，還是只能藉助於日期選取器？',
	'semanticformsinputs-timepicker-showresetbutton' => '是否應當顯示一個重置按鈕？如果禁止直接輸入，這將是用戶刪除輸入文本框的唯一方法。',
	'semanticformsinputs-regexp-regexp' => '輸入所必須匹配的正則表達式必須有效。給出時必須包括那些斜杠！默認值為"/.*/"，即任何取值。',
	'semanticformsinputs-regexp-basetype' => '所要使用的基本類型。可以是任何的輸入類型產生輸入、選擇（如文本框、 列表框、日期選取器）或別的類型的html表單元素。默認值為"text"。',
	'semanticformsinputs-regexp-baseprefix' => '基本類型參數的前綴。',
	'semanticformsinputs-regexp-orchar' => '正則表達式當中所要使用的邏輯或字符，而不是“|”。默認值為"!"。',
	'semanticformsinputs-regexp-inverse' => '如果加以設置，輸入要有效的話，不得與正則表達式相匹配。也就是說，正則表達式是倒轉的。',
	'semanticformsinputs-regexp-message' => '匹配失敗時所要顯示的錯誤信息。默認值為"格式錯誤！"（或者是當前區域的等效取值）。',
	'semanticformsinputs-menuselect-structure' => '作為無序列表的菜單結構。',
	'semanticformsinputs-menuselect-enableinputfield' => '用戶是否應該能夠直接填寫輸入文本框？',
);
