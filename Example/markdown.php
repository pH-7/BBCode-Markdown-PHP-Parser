<?php
/**
 * @title Markdown Markup Language
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012, Pierre-Henry Soria. All Rights Reserved.
 * @license          Lesser General Public License; See LICENSE.txt in the root directory.
 * @link             http://github.com/pH-7
 * @package          PH7
 * @version          1.0
 */
namespace PH7;
use PH7\Parse\Text as Txt;

require '_autoload.php';

$sMarkdownText = file_get_contents('text/markdown.md');

$oMarkdown = new Txt\Markdown($sMarkdownText);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<title>Markdown Parser example</title>
</head>
<body>
<?php echo $oMarkdown; ?>
</body>
</html>


