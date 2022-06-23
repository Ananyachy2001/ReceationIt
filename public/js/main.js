const companydes = document.getElementById("company-des");
const companyvis = document.getElementById("company-vision");
const companyhis = document.getElementById("company-history");

document.getElementById("com-des").addEventListener('click', function () {
    companydes.style.display = 'block';
    companyvis.style.display = 'none';
    companyhis.style.display = 'none';

})

document.getElementById("com-vis").addEventListener('click', function () {
    companyvis.style.display = 'block';
    companydes.style.display = 'none';
    companyhis.style.display = 'none';

})

document.getElementById("com-his").addEventListener('click', function () {
    companyhis.style.display = 'block';
    companyvis.style.display = 'none';
    companydes.style.display = 'none';

})