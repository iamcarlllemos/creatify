import 'bootstrap/dist/js/bootstrap.bundle'
import { drag_drop_upload } from './drag_drop_upload';

$('.hamburger-wrapper').on('click', function() {
    if(!$('.hamburger').hasClass('active')) {
        $('.hamburger').addClass('active');
    } else {
        $('.hamburger').removeClass('active');
    }

    if(!$('.sidebar').hasClass('active')) {
        $('.sidebar').addClass('active');
    } else {
        $('.sidebar').removeClass('active');
    }

    if(!$('.content').hasClass('active')) {
        $('.content').addClass('active');
    } else {
        $('.content').removeClass('active');
    }
});


$('#show-preferences').on('click', function() {
    if(!$('.preferences').hasClass('active')) {
        console.log(123);
        $('body, .preferences, .backdrop').addClass('active');
    } else {
        console.log(456);
        $('body, .preferences, .backdrop').removeClass('active');
    }
});

$('#hide-preferences').on('click', function() {
    $('body, .preferences, .backdrop').removeClass('active');
});

$('#hide-sidebar').on('click', function() {
    $('.sidebar, .content, .hamburger').removeClass('active');
})

$('.form-control').on('focus', function() {
    $(this).addClass('active');
}).on('blur', function() {
    if ($(this).val().trim() === '') {
        $(this).removeClass('active');
    }
});

$('.multiple-select-technologies').select2({
    width: '100%',
    theme: 'classic',
    placeholder: ' - CHOOSE TECHNOLOGIES - ',
    allowClear: false
});


// let uploadButton = document.getElementById("attachments");
// let chosenImage = document.getElementById("chosen-image");
// let fileName = document.getElementById("file-name");
// let container = document.querySelector(".container");
// let error = document.getElementById("error");
// let preview = document.querySelector(".preview-display");

// const fileHandler = (file, name, type) => {
//   if (type.split("/")[0] !== "image") {
//     //File Type Error
//     error.innerText = "Please upload an image file";
//     return false;
//   }
//   error.innerText = "";
//   let reader = new FileReader();
//   reader.readAsDataURL(file);
//   reader.onloadend = () => {
//     //image and file name
//     $('.preview-display').addClass('active');
//     const elem = `
//         <div class="image-item">
//             <figure>
//                 <div class="actions">
//                     <button type="button" class="remove-image">
//                         <i class='bx bx-x'></i>
//                     </button>
//                 </div>
//                 <img src="${reader.result}" alt="Preview Image">
//                 <figcaption>${name}</figcaption>
//             </figure>
//         </div>
//     `;

//     $('.preview-display').append(elem);
//     preview.appendChild(imageContainer);
//   };
// };

// //Upload Button
// uploadButton.addEventListener("change", () => {
//   preview.innerHTML = "";
//   Array.from(uploadButton.files).forEach((file) => {
//     fileHandler(file, file.name, file.type);
//   });
// });

// container.addEventListener(
//   "dragenter",
//   (e) => {
//     e.preventDefault();
//     e.stopPropagation();
//     container.classList.add("active");
//   },
//   false
// );

// container.addEventListener(
//   "dragleave",
//   (e) => {
//     e.preventDefault();
//     e.stopPropagation();
//     container.classList.remove("active");
//   },
//   false
// );

// container.addEventListener(
//   "dragover",
//   (e) => {
//     e.preventDefault();
//     e.stopPropagation();
//     container.classList.add("active");
//   },
//   false
// );

// container.addEventListener(
//   "drop",
//   (e) => {
//     e.preventDefault();
//     e.stopPropagation();
//     container.classList.remove("active");
//     let draggedData = e.dataTransfer;
//     let files = draggedData.files;
//     preview.innerHTML = "";
//     $('.preview-display').prev('.preview-label').remove(); 
//     $('.preview-display').before('<p class="preview-label">Image Preview</p>');     
//     Array.from(files).forEach((file) => {
//       fileHandler(file, file.name, file.type);
//     });
//   },
//   false
// );

// window.onload = () => {
//   error.innerText = "";
// };


// $(document).on('click', '.remove-image', function() {
//     $(this).closest('.image-item').remove();
// });