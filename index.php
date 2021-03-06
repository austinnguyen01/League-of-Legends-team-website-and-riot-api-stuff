<!DOCTYPE html>
<html>

<head>
    <title>Omnipotent Prodigies</title>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140216/jquery.cycle2.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href=' //maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <style type="text/css">
        /* Reset body padding and margins */
        body { margin:0; padding:0; height:100%;}
         
        /* Make Header Sticky */
        #header_container { background:#0d0d0d; border-bottom:1px solid #f9b200; height:53px; left:0; position:fixed; width:100%; top:0; z-index:5;}
        #header{ width:1200px; text-align:right; margin:0 auto; padding-top:10px;}
        #links{ width:1200px; text-align:right; margin:0 auto; padding-top:10px; font-family: "Lato"; }
        #body_container { margin-top:53px;}
        #top_container { background:#0d0d0d; width:100%; height:130px;}
        #mid_container1 { background:#0d0d0d; width:100%; height:500px;}
.father{
  width:1200px;
  height:auto;
  padding:0 20px;
  text-align:left;
  margin:0 auto;/*this margin is for the father div to get centered*/
  
  
}
.father .child{
  width:670px;
  height:100px;
  display: inline-block;
  margin: 10px auto;
padding-right:15px;

  
}
.slanted-carousel {
  position: relative;
 border-bottom:2px solid #f9b200;

}
.slanted-carousel .slider {
  /* set initial width */
 margin-top:-1px;
 width: 55%;
margin-bottom:-3px;

  /* hide the content that overflows (to allow second box to show through) */
  overflow: hidden;
  display: inline-block;
  /* skew container so that it has angled edge, and set up transition */
  transform: skewX(-20deg);
  transition: width 1.2s ease-in-out;
  /* give negative margin to remove gap caused by left hand skew */
  margin-left: -76px;
  border-right: 10px solid ghostwhite;
  /* hide pointer events for unseen content */
  pointer-events: none;
  /* make first box bigger on hover, and smaller when hover second box */
}
.slanted-carousel .caption {
 
  top: 9%;
  bottom: 10px;
  z-index: 5;

  padding-top: 10px;
  position: absolute;
  text-shadow: none;
}
.slanted-carousel .box {
 margin-top:1px;
 width: 100%;
  height: 300px;
}
.slanted-carousel .carousel-left {
  /* skew back by negative of parent’s skew so contents is upright */
  transform: skewX(20deg);
width: calc(190% - 78px);
  background:rgba(13,13,13,.8);
margin-left:75px;
  z-index:10;
  color:white;


  /* give margin to push content away from left slanted edge */
  pointer-events: auto;
  /* allow pointer events for the box */
}
.slanted-carousel .carousel-left .left-caption {
margin:0 auto;
 width:1240px;
}
.slanted-carousel .carousel-right {
  background: #0d0d0d url("assets/league.png");
  position: absolute;
  /* remove from flow so sunset is placed on top */
  
}
.slanted-carousel .carousel-right .right-caption {
  right: 3%;
  top: 40%;
}
@media screen and (min-width: 768px) {
  .slanted-carousel .caption {
    right: 20%;
    padding-bottom: 30px;
  }
}

        #mid_container2 { background:white; width:100%; height:20%; display: flex; border-bottom:3px solid #f9b200;}
        #right_container { }
        #left_container {width:479px; height:400px; display:block;}
        #logo { z-index:10;}
        .hero {
          color: #fff;
          position: relative;
          padding-top:40px;
          padding-left:0px;
        }
        .hero__text {
          font-size: 46px;
          font-weight: 600;
          left: -2px;
          letter-spacing: 2px;
          line-height: 50px;
          margin: -18px 0 1px 0;
          padding-bottom: 41px;
          position: relative;
          top: 8px;
font-family: "Lato";

        }
        .hero__subtext {
          font-size: 30px;
          line-height: 40px;
          margin: -32px 0 3px 0;
          padding: 0 0 41px 0;
          position: relative;
          top: 6px;
font-family: "Lato";
        }
         * {
           margin: 0;
           padding: 0;
          /* outline: 1px dotted salmon; */
        }
        #headerbody
	{
	width:100%;
	
	border-bottom:1px solid #f9b200;
	}
                 
        /* CSS for the content of page. I am giving top and bottom padding of 80px to make sure the header and footer do not overlap the content.*/
        
        #content{}
        #nav {margin-top:5px; padding: 0;list-style: none;background-color: #0d0d0d; float:right;border-top: 1px solid #0d0d0d }
        #nav li {float: left; }
        #nav li a {display: block;padding: 8px 15px;text-decoration: none;font-weight: bold;color: white; margin-right:40px;}
        #nav li a:hover {color: #f9b200; }
.bg
{
  width: 100%;
}
#scrimrow{
overflow: hidden;
height:153px;
}

#left{
height: 20px;
  width: 50%;
  float: right;
  display: inline-block;
 
}
* {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  font-family: arial;
}

/*=====================*/
.social-nav {
  padding: 0;
  list-style: none;
  display: inline-block;
  margin: 10px 10px;
}
.social-nav li {
  display: inline-block;
  
}
.social-nav a {
  display: inline-block;
  float: left;
  width: 48px;
  height: 48px;
  font-size: 20px;
  color: #FFF;
  text-decoration: none;
  cursor: pointer;
  text-align: center;
  line-height: 48px;
  background: #000;
  position: relative;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.model-0 {
  position: absolute;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  left: 0;
  top: 50px;
}
.model-0 li {
  float: none;
  display: block;
}
.model-0 a:hover {
  padding-left: 20px;
  width: 65px;
}
.model-0 .twitter {
  background: #00ACED;
}
.model-0 .facebook {
  background: #3B579D;
}
.model-0 .google-plus {
  background: #DD4A3A;
}
.model-0 .linkedin {
  background: #007BB6;
}
.model-0 .pinterest {
  background: #CB2026;
}

.model-1 li {
  margin: 0 2px;
}
.model-1 a {
  background: #fff;
  -moz-transition: -moz-transform 1s, background 0.4s;
  -o-transition: -o-transform 1s, background 0.4s;
  -webkit-transition: -webkit-transform 1s, background 0.4s;
  transition: transform 1s, background 0.4s;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.model-1 a:hover {
  -moz-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  -webkit-transform: translateY(-10px);
  transform: translateY(-10px);
}
.model-1 .twitter {
  color: #00ACED;
}
.model-1 .facebook {
  color: #3B579D;
}
.model-1 .google-plus {
  color: #DD4A3A;
}
.model-1 .linkedin {
  color: #007BB6;
}
.model-1 .pinterest {
  color: #CB2026;
}

.model-2 a {
  overflow: hidden;
  font-size: 26px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  margin: 0 5px;
}
.model-2 a:hover {
  background: #fff;
  text-shadow: 0px 0px #d5d5d5, 1px 1px #d5d5d5, 2px 2px #d5d5d5, 3px 3px #d5d5d5, 4px 4px #d5d5d5, 5px 5px #d5d5d5, 6px 6px #d5d5d5, 7px 7px #d5d5d5, 8px 8px #d5d5d5, 9px 9px #d5d5d5, 10px 10px #d5d5d5, 11px 11px #d5d5d5, 12px 12px #d5d5d5, 13px 13px #d5d5d5, 14px 14px #d5d5d5, 15px 15px #d5d5d5, 16px 16px #d5d5d5, 17px 17px #d5d5d5, 18px 18px #d5d5d5, 19px 19px #d5d5d5, 20px 20px #d5d5d5, 21px 21px #d5d5d5, 22px 22px #d5d5d5, 23px 23px #d5d5d5, 24px 24px #d5d5d5, 25px 25px #d5d5d5, 26px 26px #d5d5d5, 27px 27px #d5d5d5, 28px 28px #d5d5d5, 29px 29px #d5d5d5, 30px 30px #d5d5d5;
}
.model-2 .twitter {
  background: #00ACED;
  text-shadow: 0px 0px #0087ba, 1px 1px #0087ba, 2px 2px #0087ba, 3px 3px #0087ba, 4px 4px #0087ba, 5px 5px #0087ba, 6px 6px #0087ba, 7px 7px #0087ba, 8px 8px #0087ba, 9px 9px #0087ba, 10px 10px #0087ba, 11px 11px #0087ba, 12px 12px #0087ba, 13px 13px #0087ba, 14px 14px #0087ba, 15px 15px #0087ba, 16px 16px #0087ba, 17px 17px #0087ba, 18px 18px #0087ba, 19px 19px #0087ba, 20px 20px #0087ba, 21px 21px #0087ba, 22px 22px #0087ba, 23px 23px #0087ba, 24px 24px #0087ba, 25px 25px #0087ba, 26px 26px #0087ba, 27px 27px #0087ba, 28px 28px #0087ba, 29px 29px #0087ba, 30px 30px #0087ba;
}
.model-2 .twitter:hover {
  color: #00ACED;
}
.model-2 .facebook {
  background: #3B579D;
  text-shadow: 0px 0px #2d4278, 1px 1px #2d4278, 2px 2px #2d4278, 3px 3px #2d4278, 4px 4px #2d4278, 5px 5px #2d4278, 6px 6px #2d4278, 7px 7px #2d4278, 8px 8px #2d4278, 9px 9px #2d4278, 10px 10px #2d4278, 11px 11px #2d4278, 12px 12px #2d4278, 13px 13px #2d4278, 14px 14px #2d4278, 15px 15px #2d4278, 16px 16px #2d4278, 17px 17px #2d4278, 18px 18px #2d4278, 19px 19px #2d4278, 20px 20px #2d4278, 21px 21px #2d4278, 22px 22px #2d4278, 23px 23px #2d4278, 24px 24px #2d4278, 25px 25px #2d4278, 26px 26px #2d4278, 27px 27px #2d4278, 28px 28px #2d4278, 29px 29px #2d4278, 30px 30px #2d4278;
}
.model-2 .facebook:hover {
  color: #3B579D;
}
.model-2 .google-plus {
  background: #DD4A3A;
  text-shadow: 0px 0px #c23122, 1px 1px #c23122, 2px 2px #c23122, 3px 3px #c23122, 4px 4px #c23122, 5px 5px #c23122, 6px 6px #c23122, 7px 7px #c23122, 8px 8px #c23122, 9px 9px #c23122, 10px 10px #c23122, 11px 11px #c23122, 12px 12px #c23122, 13px 13px #c23122, 14px 14px #c23122, 15px 15px #c23122, 16px 16px #c23122, 17px 17px #c23122, 18px 18px #c23122, 19px 19px #c23122, 20px 20px #c23122, 21px 21px #c23122, 22px 22px #c23122, 23px 23px #c23122, 24px 24px #c23122, 25px 25px #c23122, 26px 26px #c23122, 27px 27px #c23122, 28px 28px #c23122, 29px 29px #c23122, 30px 30px #c23122;
}
.model-2 .google-plus:hover {
  color: #DD4A3A;
}
.model-2 .linkedin {
  background: #007BB6;
  text-shadow: 0px 0px #005983, 1px 1px #005983, 2px 2px #005983, 3px 3px #005983, 4px 4px #005983, 5px 5px #005983, 6px 6px #005983, 7px 7px #005983, 8px 8px #005983, 9px 9px #005983, 10px 10px #005983, 11px 11px #005983, 12px 12px #005983, 13px 13px #005983, 14px 14px #005983, 15px 15px #005983, 16px 16px #005983, 17px 17px #005983, 18px 18px #005983, 19px 19px #005983, 20px 20px #005983, 21px 21px #005983, 22px 22px #005983, 23px 23px #005983, 24px 24px #005983, 25px 25px #005983, 26px 26px #005983, 27px 27px #005983, 28px 28px #005983, 29px 29px #005983, 30px 30px #005983;
}
.model-2 .linkedin:hover {
  color: #007BB6;
}
.model-2 .pinterest {
  background: #CB2026;
  text-shadow: 0px 0px #9f191e, 1px 1px #9f191e, 2px 2px #9f191e, 3px 3px #9f191e, 4px 4px #9f191e, 5px 5px #9f191e, 6px 6px #9f191e, 7px 7px #9f191e, 8px 8px #9f191e, 9px 9px #9f191e, 10px 10px #9f191e, 11px 11px #9f191e, 12px 12px #9f191e, 13px 13px #9f191e, 14px 14px #9f191e, 15px 15px #9f191e, 16px 16px #9f191e, 17px 17px #9f191e, 18px 18px #9f191e, 19px 19px #9f191e, 20px 20px #9f191e, 21px 21px #9f191e, 22px 22px #9f191e, 23px 23px #9f191e, 24px 24px #9f191e, 25px 25px #9f191e, 26px 26px #9f191e, 27px 27px #9f191e, 28px 28px #9f191e, 29px 29px #9f191e, 30px 30px #9f191e;
}
.model-2 .pinterest:hover {
  color: #CB2026;
}

.model-3 {
  margin-bottom: 50px;
}
.model-3 a {
  background: #fff;
  -moz-transition: padding 0.4s;
  -o-transition: padding 0.4s;
  -webkit-transition: padding 0.4s;
  transition: padding 0.4s;
  margin: 0 5px;
}
.model-3 a:after {
  content: '';
  position: absolute;
  border: 24px solid #fff;
  z-index: -1;
  border-bottom-color: transparent !important;
  left: 0;
  top: 60%;
  -moz-transition: -moz-transform 0.4s;
  -o-transition: -o-transform 0.4s;
  -webkit-transition: -webkit-transform 0.4s;
  transition: transform 0.4s;
}
.model-3 a:hover {
  color: #fff;
  padding-top: 10px;
}
.model-3 a:hover:after {
  -moz-transform: translateY(10px);
  -ms-transform: translateY(10px);
  -webkit-transform: translateY(10px);
  transform: translateY(10px);
}
.model-3 .twitter {
  color: #00ACED;
}
.model-3 .twitter:hover {
  background: #00ACED;
}
.model-3 .twitter:hover:after {
  border-color: #00ACED;
}
.model-3 .facebook {
  color: #3B579D;
}
.model-3 .facebook:hover {
  background: #3B579D;
}
.model-3 .facebook:hover:after {
  border-color: #3B579D;
}
.model-3 .google-plus {
  color: #DD4A3A;
}
.model-3 .google-plus:hover {
  background: #DD4A3A;
}
.model-3 .google-plus:hover:after {
  border-color: #DD4A3A;
}
.model-3 .linkedin {
  color: #007BB6;
}
.model-3 .linkedin:hover {
  background: #007BB6;
}
.model-3 .linkedin:hover:after {
  border-color: #007BB6;
}
.model-3 .pinterest {
  color: #CB2026;
}
.model-3 .pinterest:hover {
  background: #CB2026;
}
.model-3 .pinterest:hover:after {
  border-color: #CB2026;
}

.model-4 li {
  margin: 0 2px;
}
.model-4 a {
  background: none;
  line-height: 1.5;
  font-size: 32px;
  text-shadow: 0px 0px 1px;
}
.model-4 a:hover {
  text-shadow: 0px 0px 25px;
}
.model-4 .twitter {
  color: #00ACED;
}
.model-4 .facebook {
  color: #3B579D;
}
.model-4 .google-plus {
  color: #DD4A3A;
}
.model-4 .linkedin {
  color: #007BB6;
}
.model-4 .pinterest {
  color: #CB2026;
}

.model-5 li {
  float: left;
}
.model-5 a {
  background: #222;
}
.model-5 .twitter:hover {
  color: #00ACED;
}
.model-5 .facebook:hover {
  color: #3B579D;
}
.model-5 .google-plus:hover {
  color: #DD4A3A;
}
.model-5 .linkedin:hover {
  color: #007BB6;
}
.model-5 .pinterest:hover {
  color: #CB2026;
}

.model-6 li {
  float: left;
}
.model-6 a:hover {
  background: #fff;
}
.model-6 .twitter {
  background: #00ACED;
}
.model-6 .twitter:hover {
  color: #00ACED;
}
.model-6 .facebook {
  background: #3B579D;
}
.model-6 .facebook:hover {
  color: #3B579D;
}
.model-6 .google-plus {
  background: #DD4A3A;
}
.model-6 .google-plus:hover {
  color: #DD4A3A;
}
.model-6 .linkedin {
  background: #007BB6;
}
.model-6 .linkedin:hover {
  color: #007BB6;
}
.model-6 .pinterest {
  background: #CB2026;
}
.model-6 .pinterest:hover {
  color: #CB2026;
}

.model-7 li {
  margin: 0 10px;
}
.model-7 a {
  background: none;
  -moz-box-shadow: 0 0 4px 3px;
  -webkit-box-shadow: 0 0 4px 3px;
  box-shadow: 0 0 4px 3px;
  text-shadow: 0 0 1px #333;
  -moz-transition: -moz-transform 0.4s, background 0.4s;
  -o-transition: -o-transform 0.4s, background 0.4s;
  -webkit-transition: -webkit-transform 0.4s, background 0.4s;
  transition: transform 0.4s, background 0.4s;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.model-7 a .fa {
  -moz-transition: -moz-transform 1s;
  -o-transition: -o-transform 1s;
  -webkit-transition: -webkit-transform 1s;
  transition: transform 1s;
}
.model-7 a:hover {
  background: #fff;
}
.model-7 a:hover .fa {
  -moz-transform: rotate(-10deg) scale(3);
  -ms-transform: rotate(-10deg) scale(3);
  -webkit-transform: rotate(-10deg) scale(3);
  transform: rotate(-10deg) scale(3);
}
.model-7 .twitter {
  color: #00ACED;
}
.model-7 .facebook {
  color: #3B579D;
}
.model-7 .google-plus {
  color: #DD4A3A;
}
.model-7 .linkedin {
  color: #007BB6;
}
.model-7 .pinterest {
  color: #CB2026;
}

.model-8 a {
  background: #FFF;
}
.model-8 a:hover {
  -moz-box-shadow: 0 48px 0 inset;
  -webkit-box-shadow: 0 48px 0 inset;
  box-shadow: 0 48px 0 inset;
}
.model-8 a:hover > .fa {
  color: #fff;
}
.model-8 .twitter {
  color: #00ACED;
}
.model-8 .twitter:hover {
  color: #00ACED;
}
.model-8 .facebook {
  color: #3B579D;
}
.model-8 .facebook:hover {
  color: #3B579D;
}
.model-8 .google-plus {
  color: #DD4A3A;
}
.model-8 .google-plus:hover {
  color: #DD4A3A;
}
.model-8 .linkedin {
  color: #007BB6;
}
.model-8 .linkedin:hover {
  color: #007BB6;
}
.model-8 .pinterest {
  color: #CB2026;
}
.model-8 .pinterest:hover {
  color: #CB2026;
}

.model-9 li {
  margin: 0 10px;
}
.model-9 a {
  color: #fff;
  overflow: hidden;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.model-9 a:hover {
  background: #fff;
}
.model-9 a:hover .fa {
  -moz-animation: 0.4s icon-move linear 0s;
  -webkit-animation: 0.4s icon-move linear 0s;
  animation: 0.4s icon-move linear 0s;
}
.model-9 .twitter {
  background: #00ACED;
}
.model-9 .twitter:hover {
  color: #00ACED;
}
.model-9 .facebook {
  background: #3B579D;
}
.model-9 .facebook:hover {
  color: #3B579D;
}
.model-9 .google-plus {
  background: #DD4A3A;
}
.model-9 .google-plus:hover {
  color: #DD4A3A;
}
.model-9 .linkedin {
  background: #007BB6;
}
.model-9 .linkedin:hover {
  color: #007BB6;
}
.model-9 .pinterest {
  background: #CB2026;
}
.model-9 .pinterest:hover {
  color: #CB2026;
}

.model-3d-0 a {
  background: #333;
  float: left;
  margin: 0 10px;
  -moz-transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.model-3d-0 a:hover {
  -moz-transform: rotateX(-90deg);
  -webkit-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
}
.model-3d-0 a:hover .fornt {
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.model-3d-0 a:hover .back {
  -moz-backface-visibility: visible;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
}
.model-3d-0 .front, .model-3d-0 .back {
  width: 48px;
  height: 48px;
  background: #333;
  position: absolute;
  top: 0;
  left: 0;
  -moz-transform: translateZ(18px);
  -webkit-transform: translateZ(18px);
  transform: translateZ(18px);
  -moz-backface-visibility: visible;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
}
.model-3d-0 .back {
  font-size: 32px;
  -moz-transform: rotateX(90deg) translateZ(18px);
  -ms-transform: rotateX(90deg) translateZ(18px);
  -webkit-transform: rotateX(90deg) translateZ(18px);
  transform: rotateX(90deg) translateZ(18px);
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.model-3d-0 .twitter .back {
  background: #00ACED;
}
.model-3d-0 .facebook .back {
  background: #3B579D;
}
.model-3d-0 .google-plus .back {
  background: #DD4A3A;
}
.model-3d-0 .linkedin .back {
  background: #007BB6;
}
.model-3d-0 .pinterest .back {
  background: #CB2026;
}

.model-3d-1 a {
  background: #fff;
  color: #666;
  float: left;
  margin: 0 10px;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.model-3d-1 a:hover {
  color: #fff;
  -moz-transform: rotateY(-180deg);
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
}
.model-3d-1 a:hover .fornt {
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.model-3d-1 a:hover .back {
  -moz-backface-visibility: visible;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
}
.model-3d-1 .front, .model-3d-1 .back {
  width: 48px;
  height: 48px;
  position: absolute;
  top: 0;
  left: 0;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -moz-backface-visibility: visible;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
}
.model-3d-1 .back {
  -moz-transform: rotateY(-180deg);
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.model-3d-1 .twitter .back {
  background: #00ACED;
}
.model-3d-1 .facebook .back {
  background: #3B579D;
}
.model-3d-1 .google-plus .back {
  background: #DD4A3A;
}
.model-3d-1 .linkedin .back {
  background: #007BB6;
}
.model-3d-1 .pinterest .back {
  background: #CB2026;
}

/*====== Model-9 Animation ========*/
@-moz-keyframes icon-move {
  49% {
    -moz-transform: translateX(-40px);
    transform: translateX(-40px);
    opacity: 0;
  }
  50% {
    -moz-transform: translateX(40px);
    transform: translateX(40px);
    opacity: 1;
  }
  80% {
    -moz-transform: translateX(0);
    transform: translateX(0);
  }
}
@-webkit-keyframes icon-move {
  49% {
    -webkit-transform: translateX(-40px);
    transform: translateX(-40px);
    opacity: 0;
  }
  50% {
    -webkit-transform: translateX(40px);
    transform: translateX(40px);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}
@keyframes icon-move {
  49% {
    -moz-transform: translateX(-40px);
    -ms-transform: translateX(-40px);
    -webkit-transform: translateX(-40px);
    transform: translateX(-40px);
    opacity: 0;
  }
  50% {
    -moz-transform: translateX(40px);
    -ms-transform: translateX(40px);
    -webkit-transform: translateX(40px);
    transform: translateX(40px);
    opacity: 1;
  }
  80% {
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

#right{
height: 20px;

}
.arrow-button {
  font-size: 16px;
  font-family: Helvetica, Arial, sans-serif;
  display: inline-block;
  position: relative;
  color: #fff;
  border: none;
  background: none;
  padding: 0;
  cursor: pointer;
  -webkit-filter: drop-shadow(3px 3px 3px rgba(50, 50, 50, 0.35));
  -webkit-transform: translateZ(0);
}
.arrow-button .label {
  display: inline-block;
  height: 30px;
  line-height: 30px;
  padding: 0 1.4em;
  float: left;
  background-color: #f9b200;
  transition: all 0.2s;
}
.arrow-button .arrow {
  display: block;
  float: left;
  width: 0;
  height: 0;
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  border-left: 10px solid #f9b200;
  transition: all 0.2s;
}

.arrow-button:focus {
  outline: 0 !important;
}
body{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
  font-weight: 300;
}
#pop { position: relative; width:100%;}

pop{
  position: absolute;
  top: 0; left: 0;
  z-index: 3;
width:100%;
  -webkit-animation: slideshow 12s linear 0s infinite;
  -moz-animation: slideshow 12s linear 0s infinite;
  -ms-animation: slideshow 12s linear 0s infinite;
  -o-animation: slideshow 12s linear 0s infinite;
  animation: slideshow 12s linear 0s infinite;
}
pop:nth-child(2) {
width:100%;
  z-index: 2;
  -webkit-animation: slideshow 12s linear 4s infinite;
  -moz-animation: slideshow 12s linear 4s infinite;
  -ms-animation: slideshow 12s linear 4s infinite;
  -o-animation: slideshow 12s linear 4s infinite;
  animation: slideshow 12s linear 4s infinite;
}

pop:nth-child(3) {
width:100%;
   z-index: 1;
  -webkit-animation: slideshow 12s linear 8s infinite;
  -moz-animation: slideshow 12s linear 8s infinite;
  -ms-animation: slideshow 12s linear 8s infinite;
  -o-animation: slideshow 12s linear 8s infinite;
  animation: slideshow 12s linear 8s infinite;
}

@-webkit-keyframes slideshow {
   25% { opacity: 1;}
   33.33% { opacity: 0;} 
   91.66% { opacity: 0;}
   100% { opacity: 1;}
}
@-moz-keyframes slideshow {
   25% { opacity: 1;}
   33.33% { opacity: 0;} 
   91.66% { opacity: 0;}
   100% { opacity: 1;}
}
@-ms-keyframes slideshow {
   25% { opacity: 1;}
   33.33% { opacity: 0;} 
   91.66% { opacity: 0;}
   100% { opacity: 1;}
}
@-o-keyframes slideshow {
   25% { opacity: 1;}
   33.33% { opacity: 0;} 
   91.66% { opacity: 0;}
   100% { opacity: 1;}
}
@keyframes slideshow {
   25% { opacity: 1;}
   33.33% { opacity: 0;} 
   91.66% { opacity: 0;}
   100% { opacity: 1;}
}


    </style>
</head>

<body>

    <!-- BEGIN: Sticky Header -->
    <div id="header_container">
        <div id="header">
            <a href="#myModal" data-toggle="modal" data-target="#myModal"><img src="assets/login.png"/></a> <a href="#myModal" data-toggle="modal" data-target="#myModal"><img src="assets/signup.png"/></a>
        </div>
    </div>
    <!-- END: Sticky Header -->

    <!-- BEGIN: Page Content -->

    <div id="body_container">
        <div id="top_container">
            
<div id="links">
   <div style="float:left;">
                <img src="assets/Logo-OmnipotentProdigies.png" width="140px" height="140px" style="margin-top:-15px; margin-bottom:-15px;">
                
            </div>
                    <ul id="nav" style= "padding-top:20px;">
                        <h2 class="hero_subtext">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Teams</a></li>
                            <li><a href="#">Schedule</a></li>
                            <li><a href="#">Discord</a></li>
                    </ul>
                    </h2>
                </div>
        </div>
        <div id="mid_container2" style="height:350px; background:#0d0d0d;">
<div id = "pop">
<pop><img class="bg" src="http://dummyimage.com/280x200/56AD30/fff.png&text=1" height="350px"/></pop>
<pop><img class="bg" src="http://dummyimage.com/280x200/1560f0/fff.png&text=2"  height="350px"/></pop>
<pop><img class="bg" src="http://dummyimage.com/280x200/C03229/fff.png&text=3" height="350px"/></pop>
</div>


  </div> 


</div>


        <div id="mid_container2" style="padding-bottom:20px;padding-top:10px;">

<div class="father">
  <div class="child">
<div style="border-bottom:3px solid #f9b200;"><h2 style="font-weight: 300; font-family: 'Lato';">Our<br><b>Upcoming Scrims</b></h2></div>
<div id="scrimrow" style="margin-top:14px;">
<div id="left" style="margin-left:20px; margin-top:0px;margin-right:5px;">
<div style="margin-left:20px;">
<h2 style="font-weight: 300; font-family: 'Lato';"><center><strong>Silver team 1 vs fkds</strong></center></h2>
<div style="  line-height: 30px; ">
Make sure you check in at kosdofsd. this is the first match between the two teams etc..dddsfsfs dfsdfsdfs 
<a href="#" class="arrow-button" style="float:right;"><span class="label">More Details</span><span class="arrow"></span></a>
</div></div>
</div>
<div id="right">
<div style = "width:45%; font-family: 'Lato'; background:#0d0d0d; color:white; margin-top:10px; margin-left:0px;padding-top: 40px; padding-bottom: 40px;text-align:center; border: 3px solid #f9b200;">
<h1 class="hero_subtext">April 6, 2018</h1>
</div>
</div>
</div>


<div id="scrimrow" >
<div id="left">
<div style="margin-left:20px; margin-right:5px;">
<h2 style="font-weight: 300; font-family: 'Lato';"><center><strong>Silver team 1 vs fkds</strong></center></h2>
<div style="  line-height: 30px; ">
Make sure you check in at kosdofsd. this is the first match between the two teams etc..dddsfsfs dfsdfsdfs 
<a href="#" class="arrow-button" style="float:right;"><span class="label">More Details</span><span class="arrow"></span></a>
</div>
</div></div>
<div id="right">
<div style = "width:45%; font-family: 'Lato'; background:#0d0d0d; color:white; margin-top:10px; margin-left:0px;padding-top: 40px; padding-bottom: 40px;text-align:center; border: 3px solid #f9b200;">
<h1 class="hero_subtext">April 6, 2018</h1>
</div>

</div>
</div>

</div>

   <div style="width:470px;" class="child">
<div style="border-bottom:3px solid #f9b200;"><h2 style="font-weight: 300; font-family: 'Lato';">Our<br><b>Streamed Scrims</b></h2></div>
<iframe width="470" height="302" style="margin-top:15px;"
src="https://www.youtube.com/embed/xpVfcZ0ZcFM">
</iframe>
</div>



</div>

          

       </div></div>

<div class="slanted-carousel">
  <div class="box carousel-right">
 
  </div>
  <div class="slider">
  	<div class="box carousel-left" >
      <div class="caption left-caption text-left" style="width:1200px; margin:0 auto;">
        <h1> News</h1>
<br>
        <p>
           wow we won or something poggers
        </p><br>
   <p>
           wow we won or something poggers
        </p>
<br>
   <p>
          wow we won or something poggers
        </p>
<br>
   <p>
           wow we won or something poggers
        </p>
      </div>
    </div>
  </div>
</div>

<div id ="mid_container1" style="height:160px; margin-top:0px;">
<div style ="width:1180px;  padding:0 10px;
  text-align:left;
  margin:0 auto; color:white; padding-top:10px; display:flex;">
<img src="assets/Logo-OmnipotentProdigies.png" width="140px" height="140px" >
<ul class="social-nav model-2">

  <li><a href="https://twitter.com/vivinantony" class="twitter"><i class="fa fa-twitter"></i></a></li>
  <li>
    <a href="https://www.facebook.com/vivinantony" class="facebook"> <i class="fa fa-facebook"></i></a>
  </li>
  <li><a href="https://plus.google.com/+VivinAntonyJ" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
  <li><a class="linkedin"><i class="fa fa-discord"></i></a></li>
<div style="margin-left:5px;">
some stuff idksdfsdfsdfsdf &nbsp;&nbsp;&nbsp;^  font awesome plz release the discord icon D:
</div>
<div style="margin-left:5px;">
some stuff idksdfsdfsdfsdf &nbsp;&nbsp;&nbsp;|
</div>
<div style="margin-left:5px;">
some stuff idksdfsdfsdfsdf &nbsp;&nbsp;&nbsp;|
</div>
</ul>


   
</div>
</div>



    </div>
    <!-- END: Page Content -->

    <!-- BEGIN: Sticky Footer -->

    <!-- END: Sticky Footer -->
</body>