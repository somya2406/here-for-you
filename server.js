const express = require('express');
const nodemon = require('nodemon');
const app = express();

const nodemailer = require("nodemailer");

const PORT = process.env.PORT || 5000;

app.use(express.static('public'));
app.use(express.json())
 
app.get('/',(req,res)=>{
    res.sendFile(__dirname + '/public/contactform.html')

})

app.post('/',(req,res)=>{
    console.log(req.body);
    const transporter = nodemailer.createTransport({
        service:'gmail',
        auth:{
            user:'gsomya630@gmail.com',
            pass:'hxduthybexkfxfwx'
        }

    })
     const mailOptions={
         from:req.body.email,
         to:'gsomya630@gmail.com',
         subject: `message from ${req.body.email}: ${req.body.subject}`,
         text:req.body.message
     }

     transporter.sendMail(mailOptions, (error,info)=>{
         if(error){
             console.log(error);
             res.send('error');
         }
         else{
             console.log('email sent' + info.response);
        res.send('success')
            }
     })

})

app.listen(PORT,()=>{
    console.log(`server running on ${PORT}`)
})
