var mysql = require('mysql');

exports.insertData=function (fullName,birthday,mark){
var con = mysql.createConnection({
  host: "localhost",
  user: "aminegasa",
  password: "Amin1994;",
  database: "candidateevaluation"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO candidate (fullName, birthday,mark) VALUES ?";
  var values = [
    [fullName,birthday, mark]
  ];
  con.query(sql, [values], function (err, result) {
    if (err) throw err;
    console.log("Number of records inserted: " + result.affectedRows);
  });
});

}
