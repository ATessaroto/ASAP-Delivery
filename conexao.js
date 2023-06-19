const {createConnection} = require('mysql');

const pool = createConnection ({
    host: "localhost",
    user: "root",
    password: "Anthoi97",
    database: "test",
    connectionLimit: 10
});

pool.query(`select * from user`, function(err, result, fields) {
    if (err) {
        return console.log(err);
    }
    return console.log(result);
})