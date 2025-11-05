<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMIXX - Korean Girl Group</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-gradient-to-b from-white to-pink-50">

    {{-- Hero Section (Tidak Diubah) --}}
    <section class="relative flex items-center justify-center h-screen overflow-hidden">
        <div class="absolute inset-0 z-10 bg-gradient-to-r from-pink-500/90 via-purple-500/90 to-blue-500/90"></div>
        <img
            src="https://tucffzhwwvelzaziazer.supabase.co/storage/v1/object/sign/nmixx-assets/NMIXX%20Full.jpg?token=eyJraWQiOiJzdG9yYWdlLXVybC1zaWduaW5nLWtleV8zOTBkZWY4OS03MWQ5LTQyY2QtOTI0NC03MDAyM2VlMmIxNmUiLCJhbGciOiJIUzI1NiJ9.eyJ1cmwiOiJubWl4eC1hc3NldHMvTk1JWFggRnVsbC5qcGciLCJpYXQiOjE3NjIzMjk5OTEsImV4cCI6MTc5Mzg2NTk5MX0.FCF3pMemzce6spBIgR6FazwuD7oFvz8H0t7wPuF-l-o"
            alt="NMIXX Performance"
            class="absolute inset-0 object-cover w-full h-full">
        <div class="relative z-20 px-4 text-center text-white">
            <div class="mb-6">
                <span class="inline-block px-6 py-2 mb-4 text-lg text-purple-600 bg-white rounded-full">
                    K-POP Girl Group
                </span>
            </div>
            <h1 class="mb-6 tracking-wider text-8xl">NMIXX</h1>
            <p class="mb-4 text-3xl">엔믹스</p>
            <p class="max-w-2xl mx-auto text-xl opacity-90">
                "(N) Now, New, Next, and The Unknown N & Combination and diversity (Mix)"
            </p>
            <div class="flex items-center justify-center gap-4 mt-8">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    <span>6 Members</span>
                </div>
                <div class="w-px h-6 bg-white/50"></div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                        <line x1="16" x2="16" y1="2" y2="6" />
                        <line x1="8" x2="8" y1="2" y2="6" />
                        <line x1="3" x2="21" y1="10" y2="10" />
                    </svg>
                    <span>Debut: Feb 22, 2022</span>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section (Tidak Diubah kecuali penambahan ID pada Achievements Grid) --}}
    <section class="px-4 py-20 mx-auto max-w-7xl">
        <div class="mb-12 text-center">
            <h2 class="mb-4 text-5xl">About NMIXX</h2>
            <div class="w-24 h-1 mx-auto bg-gradient-to-r from-pink-500 to-purple-500"></div>
        </div>

        <div class="grid items-center gap-8 mb-16 md:grid-cols-2">
            <div class="relative flex items-center justify-center w-full overflow-hidden bg-gray-200 rounded-lg shadow-2xl h-96">
                <img
                    src="https://tucffzhwwvelzaziazer.supabase.co/storage/v1/object/sign/nmixx-assets/nmixxx.jpg?token=eyJraWQiOiJzdG9yYWdlLXVybC1zaWduaW5nLWtleV8zOTBkZWY4OS03MWQ5LTQyY2QtOTI0NC03MDAyM2VlMmIxNmUiLCJhbGciOiJIUzI1NiJ9.eyJ1cmwiOiJubWl4eC1hc3NldHMvbm1peHh4LmpwZyIsImlhdCI6MTc2MjMzMDc3MywiZXhwIjoxNzkzODY2NzczfQ.-3QmsCDlvDi2i0ouLGr_t85ThuzL5Gc7ITu4E6NKJTI"
                    alt="NMIXX Stage"
                    class="absolute inset-0 object-cover object-center w-full h-full">
            </div>

            <div class="space-y-6">
                <div>
                    <h3 class="mb-3 text-2xl">The Concept</h3>
                    <p class="leading-relaxed text-gray-700">
                        NMIXX (엔믹스) is a six-member girl group under JYP Entertainment. The name combines
                        "N" (the letter representing the unknown and new) with "MIX" (combination),
                        symbolizing the group's concept of mixing different genres and styles to create
                        something new and unique.
                    </p>
                </div>
                <div>
                    <h3 class="mb-3 text-2xl">Musical Identity</h3>
                    <p class="leading-relaxed text-gray-700">
                        Known for their signature "MIXX POP" genre, NMIXX combines multiple music genres
                        within a single song, creating a bold and experimental sound. Their powerful
                        performances showcase exceptional vocals, dynamic choreography, and genre-bending artistry.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="inline-block px-4 py-2 text-white bg-pink-500 rounded-full">MIXX POP</span>
                    <span class="inline-block px-4 py-2 text-white bg-purple-500 rounded-full">Powerful Vocals</span>
                    <span class="inline-block px-4 py-2 text-white bg-blue-500 rounded-full">Dynamic Performance</span>
                    <span class="inline-block px-4 py-2 text-white bg-indigo-500 rounded-full">Genre-Bending</span>
                </div>
            </div>
        </div>

        {{-- Achievements Grid (ID Ditambahkan, Konten Dihapus) --}}
        <div class="grid grid-cols-1 gap-6 mt-16 md:grid-cols-2 lg:grid-cols-4" id="achievements-grid">
            {{-- Konten akan diisi oleh JavaScript --}}
        </div>
    </section>

    {{-- Members Section (Diubah untuk hanya menggunakan satu grid container) --}}
    <section class="px-4 py-20 bg-white">
        <div class="mx-auto max-w-7xl">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-5xl">Members</h2>
                <div class="w-24 h-1 mx-auto mb-4 bg-gradient-to-r from-pink-500 to-purple-500"></div>
                <p class="max-w-2xl mx-auto text-gray-600">
                    Meet the talented members of NMIXX, each bringing their unique charm and exceptional skills to the group
                </p>
            </div>



            {{-- CONTAINER UTAMA ANGGOTA (Semua filter akan render di sini) --}}
            {{-- Kita hapus div tab-content yang lain --}}
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3" id="members-grid">
                {{-- Konten akan diisi oleh JavaScript --}}
            </div>
        </div>
    </section>

    {{-- Discography Section (ID Ditambahkan, Konten Dihapus) --}}
    <section class="px-4 py-20 bg-gradient-to-b from-pink-50 to-purple-50">
        <div class="mx-auto max-w-7xl">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-5xl">Discography</h2>
                <div class="w-24 h-1 mx-auto mb-4 bg-gradient-to-r from-pink-500 to-purple-500"></div>
                <p class="max-w-2xl mx-auto text-gray-600">
                    Explore NMIXX's innovative discography featuring their signature MIXX POP sound
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4" id="discography-grid">
                {{-- Konten akan diisi oleh JavaScript --}}
            </div>
        </div>
    </section>

    {{-- Footer (Tidak Diubah) --}}
    <footer class="px-4 py-12 text-white bg-gradient-to-r from-pink-600 via-purple-600 to-blue-600">
        <div class="mx-auto text-center max-w-7xl">
            <h3 class="mb-4 text-4xl">NMIXX</h3>
            <p class="mb-6 text-xl opacity-90">엔믹스 • Mix & Match</p>
            <p class="text-sm opacity-75">
                © ditto7. All rights reserved.
            </p>
            <div class="flex items-center justify-center gap-4 mt-6 text-sm">
                <span>ditto7</span>
                <div class="w-px h-4 bg-white/50"></div>
                <span>Debut: February 22, 2022</span>
            </div>
        </div>
    </footer>

    {{-- SCRIPT JAVASCRIPT LENGKAP UNTUK FETCHING DAN RENDERING --}}
    <script type="module">
        // 1. IMPORT DAN VARIABEL GLOBAL
        import {
            supabase
        } from '/js/supabaseClient.js';

        let allMembersData = [];

        // --- 2. CARD BUILDER FUNCTIONS ---

        function createMemberCard(member) {
            const positions = Array.isArray(member.position) ? member.position.join(' &bull; ') : (member.position || 'N/A');
            const bgColor = member.color || '#C4A1FF';

            return `
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-[1.02] transition duration-300">
                    <div class="relative h-64">
                        <div style="background-color: ${bgColor};" class="absolute inset-x-0 top-0 h-2"></div>
                        <img
                            src="${member.image_url || 'https://images.unsplash.com/photo-1730328300093-f85a92502ea2?w=400'}" 
                            alt="${member.name}"
                            class="object-cover w-full h-full">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="mb-1 text-3xl font-bold" style="color: ${bgColor};">
                            ${member.name}
                        </h3>
                        <p class="mb-3 text-xl text-gray-700">${member.korean_name || 'N/A'}</p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p class="font-semibold">${positions}</p>
                            <p>
                                <span class="font-medium text-pink-500">Born:</span> ${member.birthdate || 'N/A'}
                            </p>
                            <p>
                                <span class="font-medium text-pink-500">Nationality:</span> ${member.nationality || 'N/A'}
                            </p>
                        </div>
                    </div>
                </div>
            `;
        }

        function createAchievementCard(achievement) {
            const iconMap = {
                'trophy': '<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 10h2l3-3m-3 3h-2l-3-3m0 0V3h6v4L12 10zM5 21l1-7h12l1 7H5z"/></svg>',
                'music': '<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18V5l12-2v13M9 18a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/><path d="M21 16a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/></svg>',
                'star': '<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                'sparkles': '<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1V3"/><path d="M12 21V23"/><path d="M4 12H2"/><path d="M22 12H20"/><path d="m17 17-1-1"/><path d="m8 8-1-1"/><path d="m16 8 1-1"/><path d="m8 16-1 1"/><path d="M19 19 21 21"/><path d="M3 3 5 5"/><path d="M21 3 19 5"/><path d="M3 21 5 19"/></svg>'
            };

            return `
        <div class="p-6 text-center bg-white rounded-lg shadow-md">
            <div class="mx-auto mb-3">
                ${achievement.icon_url 
                    ? `<img src="${achievement.icon_url}" alt="${achievement.achieve_name}" class="object-contain w-12 h-12 mx-auto" />` 
                    : iconMap['trophy']
                }
            </div>
            <h4 class="mb-2 text-xl font-semibold text-gray-800">${achievement.achieve_name}</h4>
            <p class="text-sm text-gray-600">${achievement.description}</p>
        </div>
    `;
        }



        function createAlbumCard(album) {
            const tracksHtml = album.tracks && Array.isArray(album.tracks) ?
                album.tracks.map(track => `<li class="text-sm text-gray-600">${track}</li>`).join('') : '';

            return `
                <div class="overflow-hidden bg-white shadow-lg rounded-xl">
                    <img
                        src="${album.image_url || 'https://images.unsplash.com/photo-1644855640845-ab57a047320e?w=400'}" 
                        alt="${album.title}" 
                        class="object-cover w-full h-auto">
                    <div class="p-5">
                        <span class="inline-block px-3 py-1 mb-2 text-xs font-medium text-purple-600 bg-purple-100 rounded-full">
                            ${album.type || 'N/A'}
                        </span>
                        <h4 class="mb-2 text-xl font-bold text-gray-900">${album.title}</h4>
                        <p class="mb-4 text-sm text-gray-500">Released: ${album.release_date || 'N/A'}</p>
                        ${tracksHtml ? `
                            <div class="pt-3 border-t">
                                <h5 class="mb-1 text-sm font-semibold text-gray-700">Tracklist:</h5>
                                <ul class="ml-2 list-disc list-inside">
                                    ${tracksHtml}
                                </ul>
                            </div>
                        ` : ''}
                    </div>
                </div>
            `;
        }

        // --- 3. RENDERER FUNCTIONS ---

        function renderMembers(filter = 'all') {
            const gridContainer = document.getElementById('members-grid');
            if (!gridContainer) return;

            let filteredMembers = allMembersData;

            // Logika Filtering: Memeriksa apakah kata kunci filter ada di salah satu posisi
            if (filter !== 'all') {
                filteredMembers = allMembersData.filter(member =>
                    Array.isArray(member.position) && member.position.some(p =>
                        p.toLowerCase().includes(filter)
                    )
                );
            }

            let htmlContent = '';
            if (filteredMembers.length > 0) {
                htmlContent = filteredMembers.map(createMemberCard).join('');
            } else {
                htmlContent = '<p class="text-center text-gray-500 col-span-full">Tidak ada anggota yang ditemukan untuk filter ini.</p>';
            }

            gridContainer.innerHTML = htmlContent;
        }

        function renderDiscography(albumsData) {
            const gridContainer = document.getElementById('discography-grid');
            if (gridContainer && albumsData) {
                gridContainer.innerHTML = albumsData.map(createAlbumCard).join('');
            }
        }

        function renderAchievements(achievementsData) {
            const gridContainer = document.getElementById('achievements-grid');
            if (gridContainer && achievementsData) {
                gridContainer.innerHTML = achievementsData.map(createAchievementCard).join('');
            }
        }

        // --- 4. DATA FETCHING UTAMA ---

        async function fetchNmixxData() {
            // A. Fetch Members
            const {
                data: members,
                error: memberError
            } = await supabase
                .from('members')
                .select('*');

            if (memberError) {
                console.error('Gagal mengambil data Anggota:', memberError);
            } else if (members) {
                allMembersData = members;
                renderMembers('all'); // Render semua anggota saat inisialisasi
            }

            // B. Fetch Albums
            const {
                data: albums,
                error: albumError
            } = await supabase
                .from('albums')
                .select('*')
                .order('release_date', {
                    ascending: false
                });

            if (albumError) {
                console.error('Gagal mengambil data Album:', albumError);
            } else if (albums) {
                renderDiscography(albums);
            }

            // C. Fetch Achievements
            const {
                data: achievements,
                error: achievementError
            } = await supabase
                .from('achievements')
                .select('*');

            if (achievementError) {
                console.error('Gagal mengambil data Achievements:', achievementError);
            } else if (achievements) {
                renderAchievements(achievements);
            }
        }


        // --- 5. INITIALIZATION & TAB SWITCHING LOGIC ---

        document.addEventListener('DOMContentLoaded', function() {
            // 1. Panggil fungsi utama untuk memulai fetching data
            fetchNmixxData();

            // 2. Logic Tab Switching
            const tabButtons = document.querySelectorAll('.tab-button');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filterName = button.dataset.tab;

                    // A. Update UI Tab Button
                    tabButtons.forEach(btn => {
                        btn.classList.remove('bg-white', 'shadow-sm');
                    });
                    button.classList.add('bg-white', 'shadow-sm');

                    // B. Panggil fungsi rendering dengan filter baru
                    renderMembers(filterName);
                });
            });
        });
    </script>
</body>

</html>