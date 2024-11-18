
// $(document).ready(function () {
//     // Запуск анимации
//     $("#tractor").animate(
//         { left: "100%" }, // Конечная позиция
//         8000, // Длительность (в миллисекундах)
//         "linear", // Тип анимации (линейная)
//         function () {
//             // Коллбэк, когда анимация завершена
//             $(this).css({ left: "-150px" }); // Возвращаем трактор в начальную позицию
//         }
//     );
// });

// $(document).ready(function () {
//     function animateTractor() {
//         $("#tractor").animate(
//             { left: "100%" },
//             8000,
//             "linear",
//             function () {
//                 $(this).css({ left: "-150px" });
//                 animateTractor(); // Повтор анимации
//             }
//         );
//     }

//     animateTractor();
// });