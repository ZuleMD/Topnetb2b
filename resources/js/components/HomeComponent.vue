<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://www.solutionscommerciales.fr/wp-content/uploads/2018/02/prospection-commerciale-btob-solutions-commerciales-1200x800.x74020.jpg"
                alt="B2B"
              />
            </div>

            <div class="carousel-item">
              <img
                src="https://www.dynamique-mag.com/wp-content/uploads/prospection.jpg"
                alt="B2B"
              />
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.min.js";

export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>