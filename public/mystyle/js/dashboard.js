function ImagePreview() {
    const images = document.querySelector('#images');
    const imagePreview = document.querySelector('.image-preview');

    imagePreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(images.files[0]);

    oFReader.onload = function (oFREvent) {
        imagePreview.src = oFREvent.target.result;
    }
}

const sideMenu = document.querySelector("aside");
const MenuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#btn-close");

MenuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})


closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})


var color = ["rgb(43, 43, 248)"];

const uji = document.getElementById('myChart');
 
new Chart(uji, {
  type: 'line',
  data: {
    labels: [ 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' , 'Sunday'],
    datasets: [{
      data: [10, 19, 30, 5, 2, 3,0],
      backgroundColor : color,
      borderWidth: 0
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

const dashboard = document.getElementById('category');
 
new Chart(dashboard, {
  type: 'pie',
  data: {
    labels: [ 'Blogs', 'Draft'],
    datasets: [{
      display: true,
      data:[21,12],
      borderWidth: 0
    }]
  },
  options:{
    responsive: true,
    maintainAspekRation: true,
  },
});

const Ctg = document.getElementById('blogdashbord');
 
new Chart(Ctg, {
  type: 'doughnut',
  data: {
    labels: [ 'Blogs', 'Draft'],
    datasets: [{
      display: true,
      data:[21,12],
      backgroundColor: ['rgb(0,0,255)','rgb(132, 0, 255)'],
      borderWidth: 0
    }]
  },
  options:{
    responsive: true,
    maintainAspekRation: true,
  },
});

