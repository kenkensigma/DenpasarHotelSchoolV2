const fullscreen = document.getElementById('fullscreen');
const fullscreenImg = document.getElementById('fullscreenImg');
const closeBtn = document.getElementById('closeBtn');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');

// Ambil semua gambar 
const galleryImages = document.querySelectorAll('.gallery-item img');
const images = Array.from(galleryImages).map(img => img.src);
let currentIndex = 0;

// buka fullscreen
galleryImages.forEach((img, index) => {
  img.addEventListener('click', () => {
    fullscreenImg.src = img.src;
    fullscreen.style.display = 'flex';
    currentIndex = index;
  });
});

// Tombol close
closeBtn.addEventListener('click', () => {
  fullscreen.style.display = 'none';
});

// Klik di luar gambar tutup fullscreen
fullscreen.addEventListener('click', (e) => {
  if (e.target !== fullscreenImg && e.target !== closeBtn) {
    fullscreen.style.display = 'none';
  }
});

// Tombol Next
nextBtn.addEventListener('click', (e) => {
  e.stopPropagation(); 
  currentIndex = (currentIndex + 1) % images.length;
  fullscreenImg.src = images[currentIndex];
});

// Tombol Back
prevBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  fullscreenImg.src = images[currentIndex];
});

// Navigasi keyboard 
document.addEventListener('keydown', (e) => {
  if (fullscreen.style.display === 'flex') {
    if (e.key === 'ArrowRight') {
      // Pindah ke gambar selanjutnya
      currentIndex = (currentIndex + 1) % images.length;
      fullscreenImg.src = images[currentIndex];
    } else if (e.key === 'ArrowLeft') {
      // Pindah ke gambar sebelumnya
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      fullscreenImg.src = images[currentIndex];
    } else if (e.key === 'Escape') {
      // Tutup fullscreen
      fullscreen.style.display = 'none';
    }
  }
});

