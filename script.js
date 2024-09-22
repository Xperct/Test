
document.querySelectorAll('.read-more').forEach(button => {
    button.addEventListener('click', () => {
        alert('Redirecting to full article...');
        // Here you can redirect to the full article page, e.g.:
        // window.location.href = 'full-article.html';
    });
});
