
const http = require('http');
const fs = require('fs');

const server  = http.createServer(function(req, res){
   console.log('request was made: ' + req.url);
   res.writeHead(200, {'content-type': 'text/html'});
   const myReadStream = fs.createReadStream(__dirname + '/home.html', 'utf8');
   myReadStream.pipe(res);
});


server.listen(8888, '127.0.0.1');

console.log('the sever is now listinng on port 8888');