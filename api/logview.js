const express = require('express');
const routes = express.Router();

const fs = require('fs');
const util = require('util');


//For Reading the File
const jsonReader = (filePath, cb) => {
   fs.readFile(filePath , 'utf-8',(err,fileData)=> {
       if(err) {
           return cb && cb(err);
       }

       try {
           return cb && cb(null, fileData);
       }
       catch (err)
       {
           return cb && cb(err);
       }
   })
}

routes.get('/',(req,res,next)=>{
    const logkey = req.body.logaccesskey;

    jsonReader('config/keysmap.json',(err,data) => {
        if(err)
        {
     console.log(err);
        }
        else
        {
          data = JSON.parse(data);
         const logfile = data.filter(x => x.logaccesskey==logkey);

         if(logfile.length===0) {

             res.status(400).json({
                message : "Contact To Admin", 
                status : "Not Authrize To View Log 🛑",
                succ : 0
             })
 
            }
             
         else{
            const filePath = logfile[0]['log'];
         
            jsonReader(filePath,(err,data)=>{
            if(err) {
                console.log(err);
            }
            else
            {
               res.status(200).json({
                   message : "Successfully Got The Logs 🎉",
                   succ : 1,
                   output : data
               })
            }
            })
         }

        }})
         
})



module.exports = routes;