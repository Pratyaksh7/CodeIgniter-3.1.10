<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
.container{
    padding:5%;
}
    #wrap{
background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Mozilla Firefox */ 
background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Opera */ 
background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
/* Webkit (Chrome 11+) */ 
background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* W3C Markup, IE10 Release Preview */ 
background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
background-repeat: no-repeat;
background-attachment: fixed;
}
legend{
	color:#141823;
	font-size:25px;
	font-weight:bold;
}
.signup-btn {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #578843);
  background-image: -moz-linear-gradient(top, #79bc64, #578843);
  background-image: -ms-linear-gradient(top, #79bc64, #578843);
  background-image: -o-linear-gradient(top, #79bc64, #578843);
  background-image: linear-gradient(to bottom, #79bc64, #578843);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  text-shadow: 0px 1px 0px #898a88;
  -webkit-box-shadow: 0px 0px 0px #a4e388;
  -moz-box-shadow: 0px 0px 0px #a4e388;
  box-shadow: 0px 0px 0px #a4e388;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #3b6e22  1px;
  text-decoration: none;
}

.signup-btn:hover {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
  background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
  background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
  background-image: -o-linear-gradient(top, #79bc64, #5e7056);
  background-image: linear-gradient(to bottom, #79bc64, #5e7056);
  text-decoration: none;
}
.navbar-default .navbar-brand{
		color:#fff;
		font-size:30px;
		font-weight:bold;
	}
.form .form-control { margin-bottom: 10px; }
@media (min-width:768px) {
	#home{
		margin-top:50px;
	}
	#home .slogan{
		color: #0e385f;
		line-height: 29px;
		font-weight:bold;
	}
}
</style>
</head>
<body>
<div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo form_open('user/store_user',['class'=>'form-horizontal']) ?>
               <legend>Sign Up</legend>
                    <h4>It's free and always will be.</h4>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <?php echo form_input(['name'=>'FirstName','class'=>'form-control input-lg','placeholder'=>'First Name']); ?>
                        </div>
                        
                        <div class="col-xs-6 col-md-6">
                            <?php echo form_input(['name'=>'LastName','class'=>'form-control input-lg','placeholder'=>'Last Name']); ?>
                       </div>
                    </div><br>
                            <?php echo form_input(['name'=>'Email','class'=>'form-control input-lg','placeholder'=>'Your Email']); ?><br>
                            <?php echo form_password(['name'=>'Password','class'=>'form-control input-lg','placeholder'=>'Password']) ?><br>
                            
                     <label>Birth Date</label>        
                        <div class="row">
                            <div class="col-xs-4 col-md-4">
                                <?php
                                    echo form_dropdown('month',[
                                        '01'    =>  'Jan',
                                        '02'    =>  'Feb',
                                        '03'    =>  'Mar',
                                        '04'    =>  'Apr',
                                        '05'    =>  'May',
                                        '06'    =>  'Jun',
                                        '07'    =>  'Jul',
                                        '08'    =>  'Aug',
                                        '09'    =>  'Sep',
                                        '10'    =>  'Oct',
                                        '11'    =>  'Nov',
                                        '12'    =>  'Dec',
                                    ],'01',['class'=>'form-control input-lg']);
                                ?>
                            </div>

                            <div class="col-xs-4 col-md-4">
                                <?php 
                                    echo form_dropdown('day',[
                                        '1'     =>  '1',
                                        '2'     =>  '2',
                                        '3'     =>  '3',
                                        '4'     =>  '4',
                                        '5'     =>  '5',
                                        '6'     =>  '6',
                                        '7'     =>  '7',
                                        '8'     =>  '8',
                                        '9'     =>  '9',
                                        '10'    =>  '10',
                                        '11'    =>  '11',
                                        '12'    =>  '12',
                                        '13'    =>  '13',
                                        '14'    =>  '14',
                                        '15'    =>  '15',
                                        '16'    =>  '16',
                                        '17'    =>  '17',
                                        '18'    =>  '18',
                                        '19'    =>  '19',
                                        '20'    =>  '20',
                                        '21'    =>  '21',
                                        '22'    =>  '22',
                                        '23'    =>  '23',
                                        '24'    =>  '24',
                                        '25'    =>  '25',
                                        '26'    =>  '26',
                                        '27'    =>  '27',
                                        '28'    =>  '28',
                                        '29'    =>  '29',
                                        '30'    =>  '30',
                                        '31'    =>  '31',

                                    ],'1',['class'=>'form-control input-lg']);
                                ?>
                            </div>
                            
                            <div class="col-xs-4 col-md-4">
                                <?php 
                                    echo form_dropdown('year',[
                                        '1995'     =>  '1995',
                                        '1996'     =>  '1996',
                                        '1997'     =>  '1997',
                                        '1998'     =>  '1998',
                                        '1999'     =>  '1999',
                                        '2000'     =>  '2000',
                                        '2001'     =>  '2001',
                                        '2002'     =>  '2002',
                                        '2003'     =>  '2003',
                                        '2004'    =>  '2004',
                                        '2005'    =>  '2005',
                                        '2006'    =>  '2006',
                                        '2007'    =>  '2007',
                                        '2008'    =>  '2008',
                                        '2009'    =>  '2009',
                                        '2010'    =>  '2010',
                                        '2011'    =>  '2011',
                                        '2012'    =>  '2012',
                                        '2013'    =>  '2013',
                                        '2014'    =>  '2014',
                                        '2015'    =>  '2015',
                                        '2016'    =>  '2016',
                                        '2017'    =>  '2017',
                                        '2018'    =>  '2018',
                                        '2019'    =>  '2019',
                                        '2020'    =>  '2020',

                                    ],'1995',['class'=>'form-control input-lg']);
                                ?>
                             </div>
                    </div><br>
                     <label>Gender : </label>                  
                        <label class="radio-inline">
                            <?php echo form_radio(['name'=>'gender','value'=>'M']); ?> Male  
                        </label>
                    <label class="radio-inline">
                             <?php echo form_radio(['name'=>'gender','value'=>'F']); ?> Female
                    </label>
                    <br />
              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <?php echo form_submit(['name'=>'submit','value'=>'Create my account','class'=>'btn btn-lg btn-primary btn-block signup-btn']); ?>
                    

           <?php echo form_close(); ?>         
          </div>
        </div>            
    </div>
</div>
</body>
</html>