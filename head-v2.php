<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">

<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                colors: {
                    rojo: { DEFAULT: '#a31a16', dark: '#7a1310', light: '#fdf1f0' },
                },
                boxShadow: {
                    soft: '0 10px 30px -12px rgba(38,34,32,0.18)',
                    softhover: '0 20px 45px -15px rgba(163,26,22,0.35)',
                },
            }
        }
    }
</script>

<link rel="stylesheet" href="assets/css/site-v2.css">
<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
    .glass { background: rgba(255,255,255,0.08); backdrop-filter: blur(14px); border: 1px solid rgba(255,255,255,0.15); }
    .glass-light { background: rgba(255,255,255,0.6); backdrop-filter: blur(14px); border: 1px solid rgba(255,255,255,0.6); }
    .text-gradient { background: linear-gradient(90deg,#fff, #ffd9d6); -webkit-background-clip: text; background-clip: text; color: transparent; }
    .blob { position: absolute; border-radius: 9999px; filter: blur(60px); opacity: .5; pointer-events: none; }
    .page-hero { background: linear-gradient(135deg, #a31a16 0%, #7a1310 100%); }
</style>
