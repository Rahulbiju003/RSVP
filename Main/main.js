const mysql = require('mysql'); 

// Create a MySQL connection 
const connection = mysql.createConnection({ 
   host: 'localhost', 
   user: 'root', 
   password: 'password' 
}); 

// Connect to MySQL 
connection.connect((err) => { 
   if (err) throw err; 
   console.log('Connected to the database'); 
}); 

// Create the timetable database 
let dbName = "timetable";
let sql = `CREATE DATABASE ${dbName}`;

connection.query(sql,(err, results, fields) => {
   if (err) throw err; 
   console.log("Database created");
}); 

// Connect to the timetable database 
connection.query('USE timetable', (err, results, fields) => {
   if (err) throw err; 
   console.log('Connected to the timetable database');
}); 

// Create a table for users 
let tableName = "users";
sql = `CREATE TABLE ${tableName} ( 
   id INT(11) NOT NULL AUTO_INCREMENT, 
   name VARCHAR(255) NOT NULL, 
   email VARCHAR(255) NOT NULL, 
   PRIMARY KEY (id) 
)`;
connection.query(sql, (err, results, fields) => {
   if (err) throw err; 
   console.log("Table created");
}); 

// Insert data into the users table 
sql = `INSERT INTO ${tableName} (name, email) 
VALUES ('John Doe', 'john@example.com'), 
('Jane Doe', 'jane@example.com')`; 
connection.query(sql, (err, results, fields) => {
   if (err) throw err;
   console.log("Data inserted");
}); 

// Query the users table 
sql = `SELECT * FROM ${tableName}`; 
connection.query(sql, (err, results, fields) => {
   if (err) throw err; 
   console.log(results);
}); 

// Close the connection 
connection.end(() => { 
   console.log('Connection closed'); 
});




// Require our ORM
const ORM = require('some-orm-library');

// Create a connection to our database
const db = await ORM.connect('localhost', 'databaseName');

// Create our route for linking JS and a database
app.get('/', async (req, res) => {
    // Fetch data from the database
    let response = await db.findAll('UserTable');
    // Return the data in the response
    res.json(response);
});

const {app, BrowserWindow} = require('electron');
const mysql = require('mysql');

let db, win;

app.on('ready', () => {
    // Connect to database
    db = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'mydb'
    });

    // Create the browser window
    win = new BrowserWindow({width: 800, height: 600});

    // Load the index.html file
    win.loadFile('index.html');
});

// Listening for requests from the renderer process
ipcMain.on('query-db', (event, sql) => {
    db.query(sql, (err, results) => {
        if (err) {
            console.error(err);
        } else {
            event.sender.send('db-results', results);
        }
    });
});
