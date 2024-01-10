const express = require('express');
const bodyParser = require('body-parser');
const { MongoClient } = require('mongodb');
const bcrypt = require('bcrypt');

const app = express();
app.use(bodyParser.json());

// Connection URI for your MongoDB database
const uri = 'mongodb://localhost:27017'; // Replace with your MongoDB URI
const dbName = 'DLCOA_Lab'; // Replace with your database name
const collectionName = 'Users'; // Replace with your collection name

app.post('/check-password', async (req, res) => {
  const { username, password } = req.body;

  const client = new MongoClient(uri, { useNewUrlParser: true, useUnifiedTopology: true });

  try {
    await client.connect();
    const database = client.db(dbName);
    const collection = database.collection(collectionName);

    const user = await collection.findOne({ username });

    if (user) {
      const passwordMatch = await bcrypt.compare(password, user.password);

      if (passwordMatch) {
        res.json({ message: 'Password is correct!' });
      } else {
        res.json({ message: 'Password is incorrect!' });
      }
    } else {
      res.json({ message: 'User not found!' });
    }
  } catch (error) {
    console.error('Error:', error);
    res.status(500).json({ message: 'Internal server error' });
  } finally {
    await client.close();
  }
});

// Your other server setup code goes here...

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
