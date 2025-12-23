<!-- Add this CSS (place in your main stylesheet or inside a <style> block) -->
<style>
    /* Discord "blurple" color */
    .btn-discord {
        color: #fff;
        background-color: #5865F2;
        border-color: #5865F2;
        background-image: none;         /* ensure no Bootstrap gradient */
        text-shadow: 0 1px 2px rgba(0,0,0,0.35);
        box-shadow: 0 6px 18px rgba(88,101,242,0.22);
        transition: background-color .15s ease, box-shadow .15s ease, transform .08s ease;
    }

    /* Hover / focus / active states */
    .btn-discord:hover,
    .btn-discord:focus {
        color: #fff;
        background-color: #4752D9;
        border-color: #3D47C7;
        box-shadow: 0 10px 24px rgba(71,82,217,0.22);
        text-decoration: none;
    }
    .btn-discord:active {
        background-color: #3D47C7;
        border-color: #333EAC;
        box-shadow: inset 0 3px 6px rgba(0,0,0,0.2);
        transform: translateY(1px);
    }

    /* If you still use .btn-transparent elsewhere, override to non-transparent here */
    .btn-transparent {
        background-image: none !important;
        background-color: #5865F2 !important;
        border-color: #5865F2 !important;
        color: #fff !important;
        text-shadow: 0 1px 2px rgba(0,0,0,0.35) !important;
        box-shadow: 0 6px 18px rgba(88,101,242,0.22) !important;
    }

    /* Heading & other hero text drop shadow */
    .hero-area .block h2,
    .hero-area .block p {
        color: #fff;
        text-shadow: 0 2px 8px rgba(0,0,0,0.6);
    }

    /* Make sure the Discord icon is white */
    .btn-discord .fa-discord,
    .btn-transparent .fa-discord {
        color: #fff;
        margin-right: 6px;
    }
</style>

<!-- Updated HTML (Bootstrap 3.x compatible) -->
<section class="hero-area overlay" style="background-image: url('template/images/banner/hero-area.jpg');">
    <video autoplay muted loop class="hero-video">
        <source src="videos/hero.mp4" type="video/mp4">
    </video>
    <div class="block">
        <div class="video-button">
            <img src="images/logo.png" class="img-circle" style="width: 25%;">
        </div>
        <h2>Hate the sin, love the sinner!</h2>
        <!-- Use the custom .btn-discord class (keeps Bootstrap .btn styling) -->
        <a data-scroll href="https://discord.hateocracy.com/" class="btn btn-discord">
            <i class="fa-brands fa-discord"></i> Join Us
        </a>
    </div>
</section>
