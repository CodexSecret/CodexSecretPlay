function code(word){
	var total = 0;
	var answer_array = [];
	var chars = word.split('');
	var dict = {
		"10": 36,
		"S" : 28,
		"K" : 20,
		"5" : 5,
		"Q" : 26,
		"6" : 6,
		"B" : 11,
		"4" : 4,
		"Z" : 35,
		"J" : 19,
		"3" : 3,
		"Y" : 34,
		"D" : 13,
		"F" : 15,
		"9" : 9,
		"O" : 24,
		"8" : 8,
		"1" : 1,
		"M" : 22,
		"E" : 14,
		"U" : 30,
		"N" : 23,
		"C" : 12,
		"G" : 16,
		"I" : 18,
		"7" : 7,
		"2" : 2,
		"X" : 33,
		"W" : 32,
		"A" : 10,
		"L" : 21,
		"T" : 29,
		"R" : 27,
		"V" : 31,
		"H" : 17,
    "0" : 0,
		"P" : 25,
	};
	var array1 = chars.map(x => dict[x]);
	for (var i=0; i<array1.length; i++) {
        answer =  array1[i]*(36**(array1.length-i-1));
		array1.splice(i, 1, answer);
    };

	for (var a=0; a<array1.length;a++){
		total = array1[a] + total;
	};
	return total;
}
