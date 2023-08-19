// var heart = document.getElementById("heart");
// heart.addEventListener('click',function(){
//     heart.classList.remove("mdi-heart-outline");
//     heart.classList.add("mdi-heart");

// })
// console.log(heart);

// function addToFavoraite(event) {
//     event.preventDefault();

//     // تغيير لون الأيقونة
//     var heartIcon = document.getElementById("heart-icon");
//     if (heartIcon.classList.contains("mdi-heart-outline")) {
//         heartIcon.classList.remove("mdi-heart-outline");
//         heartIcon.classList.add("mdi-heart");
//         heartIcon.style.color = "red";
//     } else {
//         heartIcon.classList.remove("mdi-heart");
//         heartIcon.classList.add("mdi-heart-outline");
//         heartIcon.style.color = ""; // استعادة اللون الافتراضي
//     }

//     var url = event.target.href;
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', url, true);
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             // تمت إضافة المنتج إلى المفضلة بنجاح
//             // يمكنك إجراء أي سلوك إضافي هنا بناءً على الاستجابة
//         }
//     };
//     xhr.send();
// }
