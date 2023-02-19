// filter array
let filterarray = [];

// gallery card array

let galleryarray = [
  {
    id: 1,
    name: "Live MBA Program: Strategy",
    src: "assets/img/webinar-1.jpeg",
    desc: "Strategy adalah program spesialisasi dengan pembahasan mendalam mengenai execution strategy dengan materi setara dengan Master Business Administration (MBA) yang dipadatkan selama 4 minggu.",
    time: "Sunday, November 15th at 7:00 pm",
  },
  {
    id: 2,
    name: "Live MBA Program: Leadership",
    src: "assets/img/webinar-2.jpeg",
    desc: "Sebuah program spesialisasi bersetifikat dengan pembahasan mendalam mengenai leadership dengan materi setara dengan Master Business Administration (MBA) yang dipadatkan selama 4 minggu.",
    time: "Sunday, March 10th at 7:00 pm",
  },
];

showgallery(galleryarray);

// create function to show card

function showgallery(curarra) {
  document.getElementById("card").innerText = "";
  for (var i = 0; i < curarra.length; i++) {
    document.getElementById("card").innerHTML += `
        <div class="col-md-6 d-flex align-items-stretch">
              <div class="card">
                <div class="card-img">
                  <img src="${curarra[i].src}" alt="..." />
                </div>
                <div class="card-body d-flex-row ">
                  <h5 class="card-title"><a href="course-details.html">${curarra[i].name}</a></h5>
                  <p class="fst-italic text-center">${curarra[i].time}</p>
                  <p class="card-text">
                  ${curarra[i].desc}
                  </p>
                  <p class = "d-flex justify-content-center"><a class="btn" href="#" role="button" style="background-color: #1aa294; color: white; font-weight: bold; border-radius: 30px"> Daftar Sekarang </a></p>
                </div>
              </div>
            </div>
       `;
  }
}

// For Live Searching Product

document.getElementById("myinput").addEventListener("keyup", function () {
  let text = document.getElementById("myinput").value;

  filterarray = galleryarray.filter(function (a) {
    if (a.name.includes(text)) {
      return a.name;
    }
  });
  if (this.value == "") {
    showgallery(galleryarray);
  } else {
    if (filterarray == "") {
      document.getElementById("para").style.display = "block";
      document.getElementById("card").innerHTML = "";
    } else {
      showgallery(filterarray);
      document.getElementById("para").style.display = "none";
    }
  }
});

// <div class="col-md-4 mt-3" >
//    <div class="card p-3 ps-5 pe-5">
//        <h4 class="text-capitalize text-center">${curarra[i].name}</h4>

//   <img src="${curarra[i].src}" width="100%" height="320px"/>
//   <p class="mt-2">${curarra[i].desc}</p>
//   <button class="btn btn-primary w-100 mx-auto">More</button>

//   </div>
//   </div>
