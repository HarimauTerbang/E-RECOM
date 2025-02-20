@extends('layouts.app')

@section('content')
<style>
    #header {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    #header.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<section id="header" class="jumbotron text-center">
    <div class="container">
        <h1 class="display-4 "> Rekomendasi Aplikasi untuk Bisnis Anda </h1>
        <p class="lead text-muted">Program rekomendasi aplikasi dengan metode Simple Additive Weighting</p>
        <p>
            <a href="../login" class="btn btn-secondary px-3">Get Started</a>
        </p>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Fungsi untuk menambahkan kelas 'show' ketika elemen masuk ke dalam pandangan
        function animateSectionOnScroll(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('show');
                    }, 500);
                    observer.unobserve(entry.target);
                }
            });
        }

        // Inisialisasi Intersection Observer
        const observer = new IntersectionObserver(animateSectionOnScroll, { rootMargin: '0px', threshold: 0.1 });

        // Amati elemen section dengan id 'header'
        const headerSection = document.querySelector('#header');
        observer.observe(headerSection);
    });
</script>


@endsection






