const imagePreview = document.getElementById('img-preview');
const imageUploader = document.getElementById('img-uploader');
const imageUploadbar = document.getElementById('img-upload-bar');

const CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/iqinc/image/upload';
const CLOUDINARY_UPLOAD_PRESET= 'pxzzsdi5';


imageUploader.addEventListener('change', async (e) => {
    const file = e.target.files[0];
    var year = document.getElementById("year").value;

const formData = new FormData();
if (year == "novale") {
    alert("Selecciona Una opción");
}
else if (year == 1) {
    formData.append('file', file);
    formData.append('folder', 'enerojunio2018');
    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET)
}
else if (year == 2) {
    formData.append('file', file);
    formData.append('folder', 'agostodiciembre2018');
    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET)
}
else if (year == 3) {
    formData.append('file', file);
    formData.append('folder', 'enerojunio2019');
    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET)
}
else if (year == 4) {
    formData.append('file', file);
    formData.append('folder', 'agostodiciembre2019');
    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET)
}
else if (year == 5) {
    formData.append('file', file);
    formData.append('folder', 'enerojunio2020');
    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET)
}
else if (year == 6) {
    formData.append('file', file);
    formData.append('folder', 'agostodiciembre2020');
    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET)
}
else if (year == 7) {
    formData.append('file', file);
    formData.append('folder', 'enerojunio2021');
    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET)
}

const res = await axios.post(CLOUDINARY_URL, formData, {
    Headers: {
        'Content-Type': 'multipart/form-data'
    },
    onUploadProgress (e) {
        let progress = Math.round((e.loaded * 100.0) / e.total);
        console.log(progress);
        imageUploadbar.setAttribute('value', progress);
    }
    });
console.log(res);
imagePreview.src = res.data.secure_url;
});