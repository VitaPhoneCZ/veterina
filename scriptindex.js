// Přidání události na všechny elementy s třídou 'expandable'
document.querySelectorAll('.expandable').forEach((expandable) => {
    expandable.addEventListener('click', () => {
        // Najdeme následující obsah (div .content)
        const content = expandable.nextElementSibling;

        // Přepneme třídu pro zobrazení obsahu
        content.classList.toggle('show');

        // Přepneme třídu pro otočení šipky
        expandable.classList.toggle('active');

        // Pro ladění můžeme přidat logy:
        console.log('Kliknuto na:', expandable);
        console.log('Obsah viditelný:', content.classList.contains('show'));
    });
});
