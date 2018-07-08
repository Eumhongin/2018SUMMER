let arr = ["anagrams", "concatenation", "difference", "includes", "intersection", "remove", "array-sample", "array-union", "array-without", "array-zip", "average-of-array-of-numbers", "bottom-visible", "capitalize-first-letter-of-every-word", "capitalize-first-letter", "chain-asynchronous-functions", "check-for-palindrome", "chunk-array", "collatz-algorithm", "compact", "count-occurrences-of-a-value-in-array", "current-URL", "curry", "deep-flatten-array", "distance-between-two-points", "divisible-by-number", "drop-elements-in-array", "element-is-visible-in-viewport", "escape-regular-expression", "even-or-odd-number", "factorial", "fibonacci-array-generator", "fill-array", "filter-out-non-unique-values-in-an-array", "flatten-array-up-to-depth", "flatten-array", "get-days-difference-between-dates", "get-max-value-from-array", "get-min-value-from-array", "get-native-type-of-value", "get-scroll-position", "greatest-common-divisor-(GCD)", "group-by", "hamming-distance", "head-of-list", "hexcode-to-RGB", "initial-of-list", "initialize-array-with-range", "initialize-array-with-values", "is-array", "is-boolean", "is-function", "is-number", "is-string", "is-symbol", "last-of-list", "measure-time-taken-by-function", "median-of-array-of-numbers", "nth-element-of-array", "number-to-array-of-digits", "object-from-key-value-pairs", "object-to-key-value-pairs", "ordinal-suffix-of-number", "percentile", "pick", "pipe", "powerset", "promisify", "random-integer-in-range", "random-number-in-range", "redirect-to-URL", "reverse-a-string", "RGB-to-hexadecimal", "round-number-to-n-digits", "run-promises-in-series", "scroll-to-top", "shallow-clone-object", "shuffle-array", "similarity-between-arrays", "sleep", "sort-characters-in-string-(alphabetical)", "speech-synthesis-(experimental)", "standard-deviation", "sum-of-array-of-numbers", "swap-values-of-two-variables", "tail-of-list", "take-right", "take", "truncate-a-string", "unique-values-of-array", "URL-parameters", "UUID-generator", "validate-email", "validate-number", "value-or-default", "write-json-to-file"]

const updateResult = query => {
	let resultList = document.querySelector(".matelist");
	resultList.innerHTML = "";

	arr.map(algo =>{
		query.split(" ").map(word =>{
			if(algo.toLowerCase().indexOf(word.toLowerCase()) != -1){
				resultList.innerHTML += `<div class="Mate_identification row"><img class="Mate_img" src="img/flower.jpg" alt="img" style="width:40px;"><div class="Mate_Name">${algo}</div><img class="online_circle" src="img/statement.png" alt=""></div>`;
			}
		})
	})
}

updateResult("")
