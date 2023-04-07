<!DOCTYPE html>
<html lang="en">
</html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= isset($meta['title']) ? $meta['title'] : 'Struktur Organisasi' ?></title>


<style>
	

*{
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	position: relative;
}

.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.cf:after {
    clear: both;
}

/**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
.cf {
    *zoom: 1;
}

/* Generic styling */

body{
	background: #F5EEC9;	
}

.content{
	width: 100%;
	max-width: 1142px;
	margin: 0 auto;
	padding: 0 20px;
}

a:focus{
	outline: 2px dashed #f7f7f7;
}

@media all and (max-width: 767px){
	.content{
		padding: 0 20px;
	}	
}

ul{
	padding: 0;
	margin: 0;
	list-style: none;		
}

ul a{
	display: block;
	background: #ccc;
	border: 4px solid #fff;
	text-align: center;
	overflow: hidden;
	font-size: .7em;
	text-decoration: none;
	font-weight: bold;
	color: #333;
	height: 70px;
	margin-bottom: -26px;
	box-shadow: 4px 4px 9px -4px rgba(0,0,0,0.4);
	-webkit-transition: all linear .1s;
	-moz-transition: all linear .1s;
	transition: all linear .1s;
}


@media all and (max-width: 767px){
	ul a{
		font-size: 1em;
	}
}


ul a span{
	top: 50%;
	margin-top: -0.7em;
	display: block;
}

/*
 
 */

.kiri > li > a{
	margin-bottom: 25px;
}

.utama > li > a{
	width: 50%;
	margin: 0 auto 0px auto;
}

.kanan:after{
	content: "";
	display: block;
	width: 0;
	height: 130px;
	background: red;
	border-left: 4px solid #fff;
	left: 45.45%;
	position: relative;
}

.kanan,
.departments{
	position: absolute;
	width: 100%;
}

.kanan > li:first-child,
.departments > li:first-child{	
	width: 18.59894921190893%;
	height: 64px;
	margin: 0 auto 92px auto;		
	padding-top: 25px;
	border-bottom: 4px solid white;
	z-index: 1;	
}

.kanan > li:first-child{
	float: right;
	right: 27.2%;
	border-left: 4px solid white;
}

.departments > li:first-child{	
	float: left;
	left: 27.2%;
	border-right: 4px solid white;	
}

.kanan > li:first-child a,
.departments > li:first-child a{
	width: 100%;
}

.kanan > li:first-child a{	
	left: 25px;
}

@media all and (max-width: 767px){
	.kanan > li:first-child,
	.departments > li:first-child{
		width: 40%;	
	}

	.kanan > li:first-child{
		right: 10%;
		margin-right: 2px;
	}

	.kanan:after{
		left: 49.8%;
	}

	.departments > li:first-child{
		left: 10%;
		margin-left: 2px;
	}
}


.departments > li:first-child a{
	right: 25px;
}

.department:first-child,
.departments li:nth-child(2){
	margin-left: 0;
	clear: left;	
}

.departments:after{
	content: "";
	display: block;
	position: absolute;
	width: 81.1%;
	height: 22px;	
	border-top: 4px solid #fff;
	border-right: 4px solid #fff;
	border-left: 4px solid #fff;
	margin: 0 auto;
	top: 130px;
	left: 9.1%
}

@media all and (max-width: 767px){
	.departments:after{
		border-right: none;
		left: 0;
		width: 49.8%;
	}  
}

@media all and (min-width: 768px){
	.department:first-child:before,
   .department:last-child:before{
    border:none;
  }
}

.department:before{
	content: "";
	display: block;
	position: absolute;
	width: 0;
	height: 22px;
	border-left: 4px solid white;
	z-index: 1;
	top: -22px;
	left: 50%;
	margin-left: -4px;
}

.department{
	border-left: 4px solid #fff;
	width: 18.59894921190893%;
	float: left;
	margin-left: 1.751313485113835%;
	margin-bottom: 60px;
}

.lt-ie8 .department{
	width: 18.25%;
}

@media all and (max-width: 767px){
	.department{
		float: none;
		width: 100%;
		margin-left: 0;
	}

	.department:before{
		content: "";
		display: block;
		position: absolute;
		width: 0;
		height: 60px;
		border-left: 4px solid white;
		z-index: 1;
		top: -60px;
		left: 0%;
		margin-left: -4px;
	}

	.department:nth-child(2):before{
		display: none;
	}
}

.department > a{
	margin: 0 0 -26px -4px;
	z-index: 1;
}

.department > a:hover{	
	height: 80px;
}

.department > ul{
	margin-top: 0px;
	margin-bottom: 0px;
}

.department li{	
	padding-left: 25px;
	border-bottom: 4px solid #fff;
	height: 80px;	
}

.department li a{
	background: #fff;
	top: 48px;	
	position: absolute;
	z-index: 1;
	width: 90%;
	height: 60px;
	vertical-align: middle;
	right: -1px;
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMDAwMDAwIiBzdG9wLW9wYWNpdHk9IjAuMjUiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
	background-image: -moz-linear-gradient(-45deg,  rgba(0,0,0,0.25) 0%, rgba(0,0,0,0) 100%) !important;
	background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,0.25)), color-stop(100%,rgba(0,0,0,0)))!important;
	background-image: -webkit-linear-gradient(-45deg,  rgba(0,0,0,0.25) 0%,rgba(0,0,0,0) 100%)!important;
	background-image: -o-linear-gradient(-45deg,  rgba(0,0,0,0.25) 0%,rgba(0,0,0,0) 100%)!important;
	background-image: -ms-linear-gradient(-45deg,  rgba(0,0,0,0.25) 0%,rgba(0,0,0,0) 100%)!important;
	background-image: linear-gradient(135deg,  rgba(0,0,0,0.25) 0%,rgba(0,0,0,0) 100%)!important;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#40000000', endColorstr='#00000000',GradientType=1 );
}

.department li a:hover{
	box-shadow: 8px 8px 9px -4px rgba(0,0,0,0.1);
	height: 80px;
	width: 95%;
	top: 39px;
	background-image: none!important;
}

/* Department/ section colors */
.department.dep-a a{ background: #FFD600; }
.department.dep-b a{ background: #AAD4E7; }
.department.dep-c a{ background: #FFA500; }
.department.dep-d a{ background: #f0f0f0; }
.department.dep-e a{ background: #00ff00; }
</style>

<div class="content">
  <center> <h1>Struktur Organisasi</h1> </center>
  <center> <h1>Universitas KH.A.Wahab Hasbullah</h1> </center>


  <figure class="org-chart cf">
    <ul class="kiri">
      <li>					
        <ul class="utama">
          <li>
            <a href="#"><span>HJ. HIZBIYAH ROCHIM WAHAB, M.A.,</span></a>
            <ul class="kanan">
              <li><a href="#"><span>DR. ZULFIKAR, S.P.,M.SI.,</span></a></li>
            </ul>
            <ul class="departments cf">								
              <li><a href="#"><span>PROF.DR.IR.H.GATOT CIPTADI, DESS.,IPU.,ASEAN ENG.,</span></a></li>

              <li class="department dep-a">
                <a href="#"><span>M. FARID NASRULLOH, M.PD.,</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>WISNU SAWI SATITI, S.PD., M.SC.,</span></a></li>
                  <li class="section"><a href="#"><span>OSPA PEA YUANITA MEISHANTI, M.PD.,</span></a></li>
                  <li class="section"><a href="#"><span>SUCI PRIHATININGSIH, M.PD.,</span></a></li>
                  <li class="section"><a href="#"><span>IIN BAROROH MA'ARIF,S.S.,M.PD.,</span></a></li>
                </ul>
              </li>
              <li class="department dep-b">
                <a href="#"><span>THOLIB HARIONO, M.KOM.,</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>AGUS SYIFAUNNAJAH, M.KOM.,</span></a></li>
                  <li class="section"><a href="#"><span>PRIMAADI AIRLANGGA, M.IT.,</span></a></li>
                </ul>
              </li>
              <li class="department dep-c">
                <a href="#"><span>ITA RAHMAWATI, S.E.,M.SI.,</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>KHOTIM FADHLI, M.PD.,</span></a></li>
                </ul>
              </li>
              <li class="department dep-d">
                <a href="#"><span>AMBAR SUSANTI, M.P.,</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>UMAR KHASAN, M.P.,</span></a></li>
                  <li class="section"><a href="#"><span>M. NASIRUDIN, S.SI.,M.LING.,</span></a></li>
                  <li class="section"><a href="#"><span>CANGGIH NAILIL MAGHFIROH, M.P.</span></a></li>
                  <li class="section"><a href="#"><span>DYAH AYU SRI HARTANTI, M.P.</span></a></li>
                </ul>
              </li>
              <li class="department dep-e">
                <a href="#"><span>DRS. WASLAH, M.PD.I.,</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>DR. DIDIN SIROJUDIN, M.PD.I.,</span></a></li>
                  <li class="section"><a href="#"><span>RINA DIAN RAHMAWATI, M.PD.I.,</span></a></li>
                  <li class="section"><a href="#"><span>ASHILAH, S.E.,M.M.,</span></a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>	
      </li>
    </ul>			
  </figure>
</div>
