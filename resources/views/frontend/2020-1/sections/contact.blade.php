<section class="contact" id="contact">
    <h2 class="section__title section__title--contact">Contact</h2>
    <div class="contact-info">
        <div>
            <span>email: </span><a class="footer-link" href="mailto:{{ $user->email }}">{{ $user->email }}</a>
        </div>
        <div>
            <span>phone: </span>{{ $user->phone }}
        </div>
    </div>
</section>