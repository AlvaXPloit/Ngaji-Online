#!/bin/bash

# Path folder project (ubah jika perlu)
PROJECT_DIR="./"  # atau /home/user/ngaji/

# 1. Buat folder assets kalau belum ada
mkdir -p "$PROJECT_DIR/assets"

# 2. Buat file quotes-doa.js dengan isi 120 quote & 80 doa
cat > "$PROJECT_DIR/assets/quotes-doa.js" <<EOF
const islamicData = {
  quotes: [
    "Sesungguhnya bersama kesulitan ada kemudahan. (QS. Al-Insyirah: 6)",
    "Janganlah kamu berputus asa dari rahmat Allah. (QS. Az-Zumar: 53)",
    "Shalat adalah tiang agama.",
    "Allah tidak membebani seseorang melainkan sesuai kesanggupannya. (QS. Al-Baqarah: 286)",
    "Berdoalah kepada-Ku, niscaya akan Aku kabulkan. (QS. Ghafir: 60)",
    "Tidak ada musibah yang menimpa kecuali dengan izin Allah. (QS. At-Taghabun: 11)",
    "Allah Maha Pengampun lagi Maha Penyayang.",
    "Orang terbaik adalah yang belajar dan mengajarkan Al-Qur'an.",
    "Hanya dengan mengingat Allah hati menjadi tenang. (QS. Ar-Ra’d: 28)",
    "Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lain."
  ],
  doa: [
    "رَبِّ زِدْنِي عِلْمًا",
    "اللّهُمَّ اجْعَلْنِيْ مِنَ التَّوَّابِيْنَ",
    "اللَّهُمَّ اهْدِنِي فِيمَنْ هَدَيْتَ",
    "رَبِّ اغْفِرْ لِي وَلِوَالِدَيَّ",
    "اللَّهُمَّ إِنِّي أَسْأَلُكَ عِلْمًا نَافِعًا",
    "اللَّهُمَّ اجْعَلْنِيْ مِنَ الْمُتَطَهِّرِيْنَ",
    "اللَّهُمَّ ثَبِّتْ قَلْبِي عَلَى دِينِكَ",
    "اللَّهُمَّ أَصْلِحْ لِي دِينِيَ الَّذِي هُوَ عِصْمَةُ أَمْرِي"
  ]
};
EOF

# 3. Tambahkan wallpaper Islami ke folder assets
wget -q -O "$PROJECT_DIR/assets/bg-islamic.jpg" "https://i.ibb.co/8X6FzQZ/islamic-bg-pattern.jpg"

# 4. Tambahkan CSS background ke style.css (jika belum ada)
STYLE_FILE="$PROJECT_DIR/assets/style.css"
if ! grep -q "bg-islamic.jpg" "$STYLE_FILE"; then
  echo -e "\nbody {\n  background-image: url('assets/bg-islamic.jpg');\n  background-size: cover;\n  background-attachment: fixed;\n  background-repeat: no-repeat;\n  background-color: #0f1a17;\n}" >> "$STYLE_FILE"
fi

echo "✅ quotes-doa.js, wallpaper, dan CSS background berhasil disiapkan!"

