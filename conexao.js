const express = require('express');
const mysql = require('mysql2');

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'password',
    database: 'asap'
});

const app = express();

app.get('/', (req, res) => {
    res.status(200).send('<p>Hi</p>')
});

app.get('/users', (req, res) => {
    connection.query('SELECT * FROM users', (error, results) => {
        if (error) throw error;
        res.send('Lista de usuários: ' + JSON.stringify(results));
    });
});

app.listen(3000, () => {
    console.log('Servidor iniciado na porta 3000');
});




