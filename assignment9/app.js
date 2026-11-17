/*
  Assignment 9 — CPS276 Gradebook
  Chapter 11: JavaScript language basics

  Write the functions below. Do not change the students array.
  Open index.html, then press F12 and use the Console tab.
  Do not use the DOM, events, forms, Fetch, or PHP.
*/

const course = "CPS276";

const students = [
  { name: "Ava Chen", email: "  Ava.Chen@WCCNet.edu ", score: 94 },
  { name: "Ben Ortiz", email: "BEN.ORTIZ@wccnet.edu", score: 81 },
  { name: "Cara Singh", email: "  cara.singh@WCCNET.EDU", score: 73 },
  { name: "Drew Patel", email: " drew.patel@wccnet.edu ", score: 66 },
  { name: "Elena Brooks", email: "ELENA.BROOKS@WCCNet.edu", score: 88 }
];

function cleanEmail(rawEmail) {
  // return the email after trim() and toLowerCase()
  return rawEmail.trim().toLowerCase();
}

function letterGrade(score) {
  // return "A", "B", "C", or "F"
  if (score >= 90) {
    return "A";
  } else if (score >= 80) {
    return "B";
  } else if (score >= 70) {
    return "C";
  } else {
    return "F";
  }
}

function statusLabel(score) {
  // return "pass" or "fail"
  if (score >= 70) {
    return "pass";
  } else {
    return "fail";
  }
}

function classAverage(list) {
  // return the average score as a number (do not hard-code 80.4)
  let total = 0;

  for (const student of list) {
    total += student.score;
  }

  return total / list.length;
}

function passingNames(list) {
  // filter passing students, map to names, join with ", "
  return list
    .filter(student => student.score >= 70)
    .map(student => student.name)
    .join(", ");
}

function printReport(list) {
  console.log(`=== ${course} Gradebook ===`);
  console.log("");

  // loop through list
  // log each student: name | cleaned email | score | letter | pass/fail

  // log class average
  // log passing students as one comma-separated string
  // log how many passed and how many failed

  for (const student of list) {
    console.log(
      `${student.name} | ${cleanEmail(student.email)} | ${student.score} | ${letterGrade(student.score)} | ${statusLabel(student.score)}`
    );
  }

  console.log("");

  const average = classAverage(list);
  const passed = list.filter(student => student.score >= 70).length;
  const failed = list.length - passed;

  console.log(`Class average: ${average.toFixed(1)}`);
  console.log(`Passing students: ${passingNames(list)}`);
  console.log(`Passed: ${passed} | Failed: ${failed}`);

}

printReport(students);
