document.addEventListener("DOMContentLoaded", () => {
    const $boton = document.querySelector("#btnExportar");
    $boton.addEventListener("click",() =>{
        const $elementoParaConvertir = document.body;
        html2pdf()
        .set({
            margin: 1,
            filename: 'documento.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98 
            },
            html2canvas: {
                scale: 4,
                letterRendering: true,
            },
            jsPDF: {
                unit: "cm",
                format: "letter",
                orientation: 'landscape'
            }
        })
        .from($elementoParaConvertir)
        .save()
        .catch(err = console.log(err));
    });
});