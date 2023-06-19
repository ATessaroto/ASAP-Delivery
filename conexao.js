const {createConnection} = require('mysql');

const pool = createConnection ({
    host: "localhost",
    user: "root",
    password: "password",
    database: "asap",
    connectionLimit: 10
});

pool.query(`select * from asap.user;`, function(err, result, fields) {
    if (err) {
        return console.log(err);
    }
    return console.log(result);
})