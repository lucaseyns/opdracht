var mongoose = require('mongoose');
var mongoDB = mongodb+srv://admin:<raspberry>@cluster0-yabyu.mongodb.net/test?r$
mongoose.connect(mongoDB, { useNewUrlParser: true });
var db = mongoose.connection;
db.on('error', console.error.bind(console, 'MongoDB connection error:'));

