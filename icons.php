<style>
ul {
  position:relative;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  margin:0;
  padding:0;
  display:flex;
  background-color: black;
}

ul li {
  list-style: none;
}

ul li a {
  position: ;
  width:60px;
  height:60px;
  display:block;
  text-align:center;
  margin:0 10px;
  border-radius: 50%;
  padding: 6px;
  box-sizing: border-box;
  text-decoration:none;
  box-shadow: 0 10px 15px rgba(0,0,0,0.3);
  background: linear-gradient(0deg, #ddd, #fff);
  transition: .5s;
}

ul li a:hover {
  box-shadow: 0 2px 5px rgba(0,0,0,0.3);
  text-decoration:none;
}

ul li a .fab {
  widht: 100%;
  height:100%;
  display:block;
  background: linear-gradient(0deg, #fff, #ddd);
  border-radius: 50%;
  line-height: calc(60px - 12px);
  font-size:24px;
  color: #262626;
  transition: .5s;
}

ul li:nth-child(1) a:hover .fab {
  color: #3b5998;
}

ul li:nth-child(2) a:hover .fab {
  color: #00aced;
}

ul li:nth-child(3) a:hover .fab {
  color: #dd4b39;
}

ul li:nth-child(4) a:hover .fab {
  color: #007bb6;
}

ul li:nth-child(5) a:hover .fab {
  color: #e4405f;
}
</style>
<script src="https://kit.fontawesome.com/0a908ac4fe.js" crossorigin="anonymous"></script>
<ul>
  <li><a href="https://www.facebook.com/BlackGoldMobileOil/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
  <li><a href="https://www.yelp.com/biz/black-gold-mobile-oil-service-clearfield"><i class="fab fa-yelp" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
  <li><a href="https://www.linkedin.com/in/chad-rasmusen-29827516/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
</ul>