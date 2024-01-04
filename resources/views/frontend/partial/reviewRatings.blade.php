<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
	background-image: linear-gradient(#4A148C, #E53935);
	background-repeat: no-repeat;
	color: #000;
	overflow-x: hidden;
}

a {
	text-decoration: none !important;
	color: inherit;
}

a:hover {
	color: #455A64;
}

.card {
	border-radius: 5px;
	background-color: #fff;
	padding-left: 60px;
	padding-right: 60px;
	margin-top: 30px;
	padding-top: 30px;
	padding-bottom: 30px;
}

.rating-box {
	width: 130px;
	height: 130px;
	margin-right: auto;
	margin-left: auto;
	background-color: #FBC02D;
	color: #fff;
}

.rating-label {
	font-weight: bold;
}

/* Rating bar width */
.rating-bar {
	width: 300px;
	padding: 8px;
	border-radius: 5px;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
  border-radius: 20px;
  cursor: pointer;
  margin-bottom: 5px;
}

/* Individual bars */
.bar-5 {
	width: 70%;
	height: 13px;
	background-color: #FBC02D; 
	border-radius: 20px;

}
.bar-4 {
	width: 30%;
	height: 13px;
	background-color: #FBC02D; 
	border-radius: 20px;

}
.bar-3 {
	width: 20%;
	height: 13px;
	background-color: #FBC02D; 
	border-radius: 20px;

}
.bar-2 {
	width: 10%;
	height: 13px;
	background-color: #FBC02D; 
	border-radius: 20px;

}
.bar-1 {
	width: 0%;
	height: 13px;
	background-color: #FBC02D; 
	border-radius: 20px;

}

td {
	padding-bottom: 10px;
}

.star-active {
	color: #FBC02D;
	margin-top: 10px;
	margin-bottom: 10px;
}

.star-active:hover {
	color: #F9A825;
	cursor: pointer;
}

.star-inactive {
	color: #CFD8DC;
	margin-top: 10px;
	margin-bottom: 10px;
}

.blue-text {
	color: #0091EA;
}

.content {
	font-size: 18px;
}

.profile-pic {
	width: 90px;
	height: 90px;
	border-radius: 100%;
	margin-right: 30px;
}
 
.pic {
	width: 80px;
	height: 80px;
	margin-right: 10px;
}

.vote {
	cursor: pointer;
}
    </style>
</head>
<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
                <div class="card">
                    <div class="row justify-content-left d-flex">
                        <div class="col-md-4 d-flex flex-column">
                            <div class="rating-box">
                                <h1 class="pt-4">4.0</h1>
                                <p class="">out of 5</p>
                            </div>
                            <div>
                                <span class="fa fa-star star-active mx-1"></span>
                                <span class="fa fa-star star-active mx-1"></span>
                                <span class="fa fa-star star-active mx-1"></span>
                                <span class="fa fa-star star-active mx-1"></span>
                                <span class="fa fa-star star-inactive mx-1"></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="rating-bar0 justify-content-center">
                                <table class="text-left mx-auto">
                                    <tr>
                                        <td class="rating-label">Excellent</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-5"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">123</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Good</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-4"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">23</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Average</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-3"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">10</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Poor</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-2"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">3</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Terrible</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-1"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">0</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row d-flex">
                        <div class="">
                            <img class="profile-pic" src="https://i.imgur.com/V3ICjlm.jpg">
                        </div>
                        <div class="d-flex flex-column">
                            <h3 class="mt-2 mb-0">Vikram jit Singh</h3>
                            <div>
                                <p class="text-left"><span class="text-muted">4.0</span>
                                <span class="fa fa-star star-active ml-3"></span>
                                <span class="fa fa-star star-active"></span>
                                <span class="fa fa-star star-active"></span>
                                <span class="fa fa-star star-active"></span>
                                <span class="fa fa-star star-inactive"></span></p>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <p class="text-muted pt-5 pt-sm-3">10 Sept</p>
                        </div>
                    </div>
                    <div class="row text-left">
                        <h4 class="blue-text mt-3">"An awesome activity to experience"</h4>
                        <p class="content">If you really enjoy spending your vacation 'on water' or would like to try something new and exciting for the first time.</p>
                    </div>
                    <div class="row text-left">
                        <img class="pic" src="https://i.imgur.com/kjcZcfv.jpg">
                        <img class="pic" src="https://i.imgur.com/SjBwAgs.jpg">
                        <img class="pic" src="https://i.imgur.com/IgHpsBh.jpg">
                    </div>
                    <div class="row text-left mt-4">
                        <div class="like mr-3 vote">
                            <img src="https://i.imgur.com/mHSQOaX.png"><span class="blue-text pl-2">20</span>
                        </div>
                        <div class="unlike vote">
                            <img src="https://i.imgur.com/bFBO3J7.png"><span class="text-muted pl-2">4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
