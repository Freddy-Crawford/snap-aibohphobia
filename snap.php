
/**
 * attemp
 * User: macbookpro
 * Date: 2/7/18
 * Time: 8:24 AM
 */
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>snap-aibohphobia</title>

</head>
	<body>

		//*this is my first attempt
		*//

<script>
	function palindrome(str) {
		var re = /[^A-Za-z0-9]/g;
		str = str.toLowerCase().replace(re, '');
		var len = str.length;
		for (var i = 0; i < len/2; i++) {
			if (str[i] !== str[len - 1 - i]) {
				return false;
			}
		}
		return true;
	}
	palindrome("A man, a plan, a canal. Panama");
</script>




</body>
</html>