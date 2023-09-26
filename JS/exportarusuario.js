const $btnExportar = document.querySelector("#btnExportar"),
        $datatable = document.querySelector("#datatable");

    $btnExportar.addEventListener("click", function() {
        let tableExport = new TableExport($datatable, {
            exportButtons: false, // No queremos botones
            filename: "Reporte de Usuarios", //Nombre del archivo de Excel
            sheetname: "Reporte de Usuarios", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.datatable.xlsx;
        tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });