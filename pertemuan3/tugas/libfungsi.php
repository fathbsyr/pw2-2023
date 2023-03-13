<?php
/**
 * Task 4 - Function
 * function kelulusan
 * function grade
 * function predikat
 */


function kelulusan($rata_rata)
{	/**
 * Keterangan:
 * Function kelulusan, jika:
 * total nilai lebih dari 55 maka lulus
 * total nilai kurang dari 55 maka tidak lulus
 */

	if ($rata_rata >= 55) {
		return 'Lulus';
	} elseif ($rata_rata <= 55) {
		return 'Tidak Lulus';
	} else {
		return 'Gak Kuliah';
	}
}

 function grade($rata_rata) 
{	/**
 * Function grade, jika:
 * total nilai <= 100 maka A
 * total nilai <= 84 maka B
 * total nilai <= 69 maka C
 * total nilai <= 55 maka D
 * total nilai <= 35 maka E
 * selain itu maka I
 */
	if ($rata_rata <= 35) {
		return 'E';
	} elseif ($rata_rata <= 55) {
		return 'D';
	} elseif ($rata_rata <= 69) {
		return 'C';
	} elseif ($rata_rata <=  84) {
		return 'B';
	} elseif ($rata_rata <= 100) {
		return 'A';
	} else {
		return 'I';
	}
}

function predikat($grade)
{	/**
 * Function predikat, jika:
 * grade A maka Sangat Memuaskan
 * grade B maka Memuaskan
 * grade C maka Cukup
 * grade D maka Kurang
 * grade E maka Sangat Kurang
 * selain itu maka Tidak Ada
 *
 * Tips: Gunakan switch untuk mempermudah 
 * melakukan pengecekan kondisi berdasarkan function grade
 */
	switch ($grade) {
		case 'A':
			return 'Sangat Memuaskan';
		case 'B':
			return 'Memuaskan';
		case 'C':
			return 'Cukup';
		case 'D':
			return 'Kurang';
		case 'E':
			return 'Sangat Kurang';
		default:
			return 'Tak Ada';
	}
}
