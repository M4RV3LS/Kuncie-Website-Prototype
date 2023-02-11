// filter array
let filterarray = [];

// gallery card array

let galleryarray = [
  {
    id: 1,
    name: "Dasar Menulis Fiksi Cara Dee Lestari",
    src: "assets/img/kelas unggulan 1 .jpeg",
    desc: "Ayo belajar menulis fiksi dari Dee Lestari dan dapatkan tips menulis fiksi berdasarkan pengalaman menulisnya selama lebih dari dua dekade.",
    star: "(144)",
    price: "Rp. 149.000",
    mentor: "Dee Lestari",
    trainer: "assets/img/trainers/trainer-1.jpg",
    student: "995",
    love: "65",
  },
  {
    id: 2,
    name: "Cara berpresentasi dengan menggugah dan efektif",
    src: "assets/img/kelas unggulan 2.jpeg",
    desc: "Skill presentasi punya peranan penting di dunia kerja. Ayo kuasai teknik presentasi mulai dari persiapan, metode online maupun offline, hingga praktek presentasi langsung dari Teuku Daffa, seorang certified public speaker!",
    star: "(7)",
    price: "Rp. 149.000",
    mentor: "Teuku Daffa",
    trainer: "assets/img/trainers/trainer-2.jpg",
    student: "72",
    love: "65",
  },
  {
    id: 3,
    name: "Mini Class - Workflow Seorang Photographer",
    src: "assets/img/kelas unggulan 3.jpeg",
    desc: "Fotografer adalah salah satu profesi yang sangat mengandalkan ketajaman mata Ternyata, fotografer nggak cuma jepret-jepret aja! Ayo belajar workflow seorang fotografer langsung dari Martha Suherman",
    star: "(4)",
    price: "Rp. 50.000",
    mentor: "Martha Suherman",
    trainer: "assets/img/trainers/trainer-3.jpg",
    student: "245",
    love: "65",
  },
];

showgallery(galleryarray);

// create function to show card

function showgallery(curarra) {
  document.getElementById("card").innerText = "";
  for (var i = 0; i < curarra.length; i++) {
    document.getElementById("card").innerHTML += `
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
                <div class="d-flex justify-content-center">
                  <img src="${curarra[i].src}" class="img-fluid mt-3 rounded" alt="..." />
                </div>
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <i class="bi bi-star-fill Yellow"
                      ><i class="bi bi-star-fill"
                        ><i class="bi bi-star-fill"
                          ><i class="bi bi-star-fill"
                            ><i class="bi bi-star-fill"><i class="bi bi-star-fill">${curarra[i].star}</i></i></i
                          ></i
                        ></i
                      ></i
                    >
                    <p class="price">${curarra[i].price}</p>
                  </div>

                  <h3><a href="course-details.html">${curarra[i].name}</a></h3>
                  <p>Mentor ; ${curarra[i].mentor}<br /><br />
                  ${curarra[i].desc}
                  </p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="${curarra[i].trainer}" class="img-fluid" alt="" />
                      <span>${curarra[i].mentor}</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;${curarra[i].student} &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;${curarra[i].love}</div>
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
