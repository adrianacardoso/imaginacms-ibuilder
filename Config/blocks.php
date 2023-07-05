<?php

$vAttributes = include(base_path() . '/Modules/Isite/Config/standardValuesForBlocksAttributes.php');

return [
  "block" => [
    "title" => "Bloque",
    "systemName" => "x-ibuilder::block",
    "nameSpace" => "Modules\Ibuilder\View\Components\Block",
    "internal" => true,
    "attributes" => [
      "general" => [
        "title" => "General",
        "fields" => [
          "id" => [
            "name" => "id",
            "type" => "input",
            "props" => [
              "label" => "Ingresar el id",
              "type" => "text"
            ]
          ],
          "container" => [
            "name" => "container",
            "type" => "select",
            "props" => [
              "label" => "Tipo de contenedor",
              "options" => $vAttributes["containers"]
            ]
          ],
          /*"borderForm" => [
              "name" => "borderForm",
              "value" => "rounded-0",
              "type" => "select",
              "props" => [
                  "label" => "background container",
                  "options" => [
                      ["label" => "todos los lados", "value" => "rounded"],
                      ["label" => "esquinas arriba redondeado", "value" => "rounded-top"],
                      ["label" => "esquinas de la derecha redondeado", "value" => "rounded-right"],
                      ["label" => "esquinas de abajo redondeado", "value" => "rounded-bottom"],
                      ["label" => "esquinas de la izquierda redondeado", "value" => "rounded-left"],
                      ["label" => "en ciruclo", "value" => "rounded-circle"],
                      ["label" => "por defecto", "value" => "rounded-0"]
                  ]
              ]
          ],
          "display" => [
              "name" => "display",
              "value" => "none",
              "type" => "select",
              "props" => [
                  "label" => "display container",
                  "options" => $vAttributes["display"]
              ]
          ],
          "paddingX" => [
              "name" => "paddingX",
              "type" => "input",
              "props" => [
                  "label" => "padding large",
                  "type" => "number"
              ]
          ],
          "paddingY" => [
              "name" => "paddingY",
              "type" => "input",
              "props" => [
                  "label" => "padding lenght",
                  "type" => "number"
              ]
          ],
          "marginX" => [
              "name" => "marginX",
              "type" => "input",
              "props" => [
                  "label" => "margin large",
                  "type" => "number"
              ]
          ],
          "marginY" => [
              "name" => "marginY",
              "type" => "input",
              "props" => [
                  "label" => "margin lenght",
                  "type" => "number"
              ]
          ],
          */
          "overlay" => [
            "name" => "overlay",
            "value" => "",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Opacidad"
            ]
          ],
          "backgroundColor" => [
            "name" => "backgroundColor",
            "value" => "",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Gradiente de fondo"
            ]
          ],
          "backgrounds" => [
            "name" => "backgrounds",
            "type" => "json",
            "columns" => "col-12",
            "value" => ["position" => "center", "size" => "cover", "repeat" => "no-repeat", "color" => "", "attachment" => ""],
            "props" => [
                "label" => "Opciones de Fondo"
            ]
          ],
          "row" => [
            "name" => "row",
            "value" => "justify-content-center align-items-center",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Fila (Alineación vertical y horizontal)",
            ]
          ],
          "columns" => [
            "name" => "columns",
            "value" => "col-12",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Columnas",
            ]
          ],
          "position" => [
            "name" => "position",
            "value" => "relative",
            "type" => "select",
            "props" => [
                "label" => "Posición",
                "options" => [
                    ["label" => "relative", "value" => "relative"],
                    ["label" => "static", "value" => "static"],
                    ["label" => "absolute", "value" => "absolute"],
                    ["label" => "fixed", "value" => "fixed"],
                    ["label" => "sticky", "value" => "sticky"],
                    ["label" => "inherit", "value" => "inherit"],
                    ["label" => "revert", "value" => "revert"],
                    ["label" => "initial", "value" => "initial"],
                    ["label" => "revert-layer", "value" => "revert-layer"],
                    ["label" => "unset", "value" => "unset"],
                ],
            ]
          ],
          "zIndex" => [
            "name" => "zIndex",
            "value" => "",
            "type" => "input",
            "props" => [
                "label" => "Orden entre elementos (z-index)"
            ]
          ],
          "top" => [
            "name" => "top",
            "value" => "",
            "type" => "input",
            "props" => [
                "label" => "Posición Superior (Top)"
            ]
          ],
          "bottom" => [
            "name" => "bottom",
            "value" => "",
            "type" => "input",
            "props" => [
                "label" => "Posición Inferior (Bottom)"
            ]
          ],
          "left" => [
            "name" => "left",
            "value" => "",
            "type" => "input",
            "props" => [
                "label" => "Posición Izquierda (Left)"
            ]
          ],
          "right" => [
            "name" => "right",
            "value" => "",
            "type" => "input",
            "props" => [
                "label" => "Posición Derecha (Right)"
            ]
          ],
          "width" => [
            "name" => "width",
            "value" => "auto",
            "type" => "input",
            "props" => [
                "label" => "Ancho del Bloque",
            ]
          ],
          "height" => [
            "name" => "height",
            "value" => "auto",
            "type" => "input",
            "props" => [
                "label" => "Alto del Bloque",
            ]
          ],
          "blockClasses" => [
            "name" => "blockClasses",
            "value" => "",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Bloque de Clases"
            ]
          ],
          "blockStyle" => [
            "name" => "blockStyle",
            "value" => "",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Bloque de Estilos",
              'type' => 'textarea',
              'rows' => 10,
            ]
          ],
        ]
      ],
      "animationBlock" => [
        "title" => "Animaciones de Entrada",
        "fields" => [
            "animateBlockName" => [
                "name" => "animateBlockName",
                "value" => "",
                "type" => "select",
                "props" => [
                    "label" => "Animacion",
                    "options" => $vAttributes["animationAOS"]
                ]
            ],
            "animateBlockDuration" => [
                "name" => "animateBlockDuration",
                "type" => "input",
                "props" => [
                    "label" => "Duracion"
                ],
                "help" => [
                    "description" => "Valores de 0 a 3000, con paso de 50ms"
                ]
            ],
            "animateBlockOffset" => [
                "name" => "animateBlockOffset",
                "type" => "input",
                "props" => [
                    "label" => "Offset",
                ],
                "help" => [
                    "description" => "Desplazamiento (en px) desde el punto de activación original"
                ]
            ],
            "animateBlockDelay" => [
                "name" => "animateBlockDelay",
                "type" => "input",
                "props" => [
                    "label" => "Delay",
                ],
                "help" => [
                    "description" => "Valores de 0 a 3000, con paso de 50ms"
                ]
            ],
            "animateBlockEasing" => [
                "name" => "animateBlockEasing",
                "value" => "ease",
                "type" => "select",
                "props" => [
                    "label" => "Easing",
                    "options" => $vAttributes["easingAOS"]
                ]
            ],
            "animateBlockOnce" => [
                "name" => "animateBlockOnce",
                "value" => true,
                "type" => "select",
                "props" => [
                    "label" => "One",
                    "options" => $vAttributes["booleanValidation"]
                ],
                "help" => [
                    "description" => "Si la animación debe ocurrir solo una vez, mientras se desplaza hacia abajo"
                ]
            ],
            "animateBlockMirror" => [
                "name" => "animateBlockMirror",
                "value" => true,
                "type" => "select",
                "props" => [
                    "label" => "Mirror",
                    "options" => $vAttributes["booleanValidation"]
                ],
                "help" => [
                    "description" => "Si los elementos deben animarse mientras se desplazan más allá de ellos"
                ]
            ],
        ]
      ],
    ]
  ],
  "custom" => [
    "title" => "Entorno Custom",
    "systemName" => "ibuilder::block-custom",
    "nameSpace" => "Modules\Ibuilder\View\Components\BlockCustom",
    "contentFields" => [
      "titleCustom" => [
        "name" => "titleCustom",
        "type" => "input",
        "isTranslatable" => true,
        "props" => [
          "label" => "Texto (titulo)"
        ]
      ],
      "subTitleCustom" => [
        "name" => "subTitleCustom",
        "type" => "input",
        "isTranslatable" => true,
        "props" => [
          "label" => "Texto (Subtitulo)"
        ]
      ],
      "summaryCustom" => [
        "name" => "summaryCustom",
        "type" => "input",
        "columns" => "col-12",
        "isTranslatable" => true,
        "props" => [
          "label" => "Texto (Resumen)",
          'type' => 'textarea',
          'rows' => 4,
        ]
      ],
      "descriptionCustom" => [
        "name" => "descriptionCustom",
        "type" => "html",
        "isTranslatable" => true,
        "columns" => "col-12",
        "props" => [
          "label" => "Descripcion"
        ]
      ],
      "video" => [
        "name" => "video",
        "type" => "input",
        "isTranslatable" => true,
        "columns" => "col-12",
        "props" => [
            "label" => "Url del video"
        ]
      ],
      "mainImage" => [
        'value' => (object)['custommainimage' => null],
        'name' => 'mediasSingle',
        'type' => 'media',
        "columns" => "col-12",
        "isTranslatable" => false,
        'props' => [
          'label' => 'Imagen Principal',
          'zone' => 'custommainimage',
          'entity' => "Modules\Ibuilder\Entities\Block",
          'entityId' => null
        ]
      ],
      "gallery" => [
        'value' => (object)['customgallery' => []],
        'name' => 'mediasMulti',
        'type' => 'media',
        "columns" => "col-12",
        "isTranslatable" => false,
        'props' => [
          'label' => 'Galería',
          'zone' => 'customgallery',
          'maxFiles' => 12,
          'entity' => "Modules\Ibuilder\Entities\Block",
          'entityId' => null
        ]
      ],
    ],
    "attributes" => [
      "general" => [
        "title" => "General",
        "fields" => [
          "includeCustom" => [
            "name" => "includeCustom",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Include adicional",
            ]
          ],
          "position" => [
            "name" => "position",
            "value" => "1",
            "type" => "select",
            "columns" => "col-12",
            "props" => [
              "label" => "Posicion de los elementos",
              "options" => [
                ["label" => "Una columna", "value" => "1"],
                ["label" => "Dos columnas (imagen, video a la izquierda)", "value" => "2"],
                ["label" => "Dos columnas (imagen, video a la derecha)", "value" => "3"],
                ["label" => "Titulo mas dos columnas (imagen, video a la izquierda)", "value" => "4"],
                ["label" => "Titulo mas dos columnas (imagen, video a la derecha)", "value" => "5"],
              ],
            ]
          ],
          "mediaClasses" => [
            "name" => "mediaClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases en Imagen o Video"
            ]
          ],
          "contentClasses" => [
            "name" => "contentClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases en contenido"
            ]
          ],
          "gridColumns" => [
            "name" => "gridColumns",
            "value" => "repeat(2, minmax(0, 1fr))",
            "type" => "input",
            "props" => [
              "label" => "Ancho de columnas"
            ]
          ],
          "gridGap" => [
            "name" => "gridGap",
            "value" => "15px",
            "type" => "input",
            "props" => [
              "label" => "Espacio entre columnas"
            ]
          ],
          "orderClasses" => [
            "name" => "orderClasses",
            "value" => ["video" => "order-0", "image" => "order-1", "title" => "order-2", "subtitle" => "order-3", "summary" => "order-4", "description" => "order-5", "buttom" => "order-6"],
            "type" => "json",
            "columns" => "col-12",
            "props" => [
              "label" => "Orden de los elementos"
            ]
          ],
        ]
      ],
      "text" => [
        "title" => "Contenido",
        "fields" => [
          "titleClasses" => [
            "name" => "titleClasses",
            "type" => "input",
            "columns" => "col-md-7",
            "props" => [
              "label" => "Clases (titulo)"
            ]
          ],
          "titleSize" => [
            "name" => "titleSize",
            "type" => "input",
            "columns" => "col-md-5",
            "props" => [
              "label" => "Tamaño Fuente (titulo)"
            ]
          ],
          "subTitleClasses" => [
            "name" => "subTitleClasses",
            "type" => "input",
            "columns" => "col-md-7",
            "props" => [
              "label" => "Clases (Subtitulo)"
            ]
          ],
          "subTitleSize" => [
            "name" => "subTitleSize",
            "type" => "input",
            "columns" => "col-md-5",
            "props" => [
              "label" => "Tamaño Fuente (Subtitulo)"
            ]
          ],
          "summaryClasses" => [
            "name" => "summaryClasses",
            "type" => "input",
            "columns" => "col-md-7",
            "props" => [
              "label" => "Clases (Resumen)"
            ]
          ],
          "summarySize" => [
            "name" => "summarySize",
            "type" => "input",
            "columns" => "col-md-5",
            "props" => [
              "label" => "Tamaño Fuente (Resumen)"
            ]
          ],
        ]
      ],
      "media" => [
        "title" => "Imagen y Video",
        "fields" => [
          "imageOnClasses" => [
            "name" => "imageOnClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases sobre (Imagen)"
            ]
          ],
          "imageInClasses" => [
            "name" => "imageInClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases en (Imagen)"
            ]
          ],
          "imageStyles" => [
            "name" => "imageStyles",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Estilos adicionales (Imagen)"
            ]
          ],
          "videoResponsive" => [
            "name" => "videoResponsive",
            "type" => "select",
            "columns" => "col-12",
            "props" => [
              "label" => "Responsive (Video)",
              "options" => $vAttributes["embedResponsive"]
            ]
          ],
          "videoClasses" => [
            "name" => "videoClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases (Video)"
            ]
          ],
        ]
      ],
      "boton" => [
        "title" => "Boton",
        "fields" => [
          "withButton" => [
            "name" => "withButton",
            "value" => "0",
            "type" => "select",
            "props" => [
              "label" => "Mostrar",
              "options" => $vAttributes["validation"]
            ]
          ],
          "buttonLabel" => [
            "name" => "buttonLabel",
            "type" => "input",
            "props" => [
              "label" => "Texto"
            ]
          ],
          "buttonSizeLabel" => [
            "name" => "buttonSizeLabel",
            "type" => "input",
            "props" => [
              "label" => "Tamaño del texto",
              "type" => "number"
            ]
          ],
          "buttonIconClass" => [
            "name" => "buttonIconClass",
            "type" => "input",
            "props" => [
              "label" => "Tipo de Icono"
            ]
          ],
          "buttonIconPosition" => [
            "name" => "buttonIconPosition",
            "value" => "left",
            "type" => "select",
            "props" => [
              "label" => "Posición del icono",
              "options" => [
                ["label" => "Izquierda", "value" => "left"],
                ["label" => "Derecha", "value" => "right"]
              ]
            ]
          ],
          "buttonLayout" => [
            "name" => "buttonLayout",
            "value" => "",
            "type" => "select",
            "props" => [
              "label" => "Estilo de Botones",
              "options" => $vAttributes["buttonStyle"]
            ]
          ],
          "buttonStyle" => [
            "name" => "buttonStyle",
            "value" => "button-normal",
            "type" => "select",
            "props" => [
              "label" => "Espaciado",
              "options" => $vAttributes["buttonType"]
            ]
          ],
          "buttonClasses" => [
            "name" => "buttonClasses",
            "type" => "input",
            "props" => [
              "label" => "Clases en general",
            ]
          ],
          "buttonAlign" => [
            "name" => "buttonAlign",
            "type" => "select",
            "props" => [
              "label" => "Alineación",
              "options" => $vAttributes["align"]
            ]
          ],
          "buttonHref" => [
            "name" => "buttonHref",
            "type" => "input",
            "props" => [
              "label" => "Enlace"
            ]
          ],
          "buttonTarget" => [
            "name" => "buttonTarget",
            "type" => "select",
            "props" => [
              "label" => "Target",
              "options" => $vAttributes["target"]
            ]
          ],
          "buttonColor" => [
            "name" => "buttonColor",
            "value" => "primary",
            "type" => "select",
            "props" => [
              "label" => "Color",
              "options" => $vAttributes["bgColor"]
            ]
          ],
        ]
      ],
    ]
  ],
  "title" => [
    "title" => "Titulos",
    "systemName" => "ibuilder::title",
    "nameSpace" => "Modules\Ibuilder\View\Components\Title",
    "internal" => true,
    "attributes" => [
        "general" => [
            "title" => "General",
            "fields" => [
                "textClasses" => [
                    "name" => "textClasses",
                    "columns" => "col-md-12",
                    "type" => "input",
                    "props" => [
                        "label" => "Clase General de los textos"
                    ]
                ],
                "textPosition" => [
                    "name" => "textPosition",
                    "value" => "2",
                    "columns" => "col-12",
                    "type" => "select",
                    "props" => [
                        "label" => "Posición de los textos",
                        "options" => [
                            ["label" => "Solo título", "value" => "1"],
                            ["label" => "Solo Subtítulo", "value" => "4"],
                            ["label" => "Título con descripción abajo", "value" => "2"],
                            ["label" => "Título abajo con descripción arriba", "value" => "3"],

                        ]
                    ]
                ],
                "textAlign" => [
                    "name" => "textAlign",
                    "columns" => "col-12",
                    "type" => "select",
                    "props" => [
                        "label" => "Alineación",
                        "options" => $vAttributes["align"]
                    ]
                ],
                "textVineta" => [
                    "name" => "textVineta",
                    "type" => "input",
                    "props" => [
                        "label" => "Icono"
                    ]
                ],
                "textVinetaColorClass" => [
                    "name" => "textVinetaColorClass",
                    "type" => "select",
                    "props" => [
                        "label" => "Color icon (Clases)",
                        "options" => $vAttributes["textColors"]
                    ]
                ],
                "textVinetaColor" => [
                    "name" => "textVinetaColor",
                    "type" => "inputColor",
                    "props" => [
                        "label" => "Color icon",
                    ],
                    "help" => [
                        "description" => "Selecciona el color custom en Color icon Class para activarlo",
                    ]
                ],
                "textVinetaPosition" => [
                    "name" => "textVinetaPosition",
                    "value" => "1",
                    "type" => "select",
                    "props" => [
                        "label" => "Posición del icono",
                        "options" => [
                            ["label" => "Sobre el titulo", "value" => "1"],
                            ["label" => "Debajo del titulo", "value" => "2"],
                            ["label" => "Al lado derecho del titulo", "value" => "3"],
                            ["label" => "Al lado izquierdo del titulo", "value" => "4"],
                            ["label" => "Sobre del subtitulo", "value" => "5"],
                            ["label" => "Debajo del subtitulo", "value" => "6"],
                        ]
                    ]
                ],
                "textWithLine" => [
                    "name" => "textWithLine",
                    "value" => "0",
                    "type" => "select",
                    "props" => [
                        "label" => "Linea",
                        "options" => $vAttributes["titleLine"]
                    ]
                ],
                "textLineConfig" => [
                    "name" => "textLineConfig",
                    "value" => ['background' => 'var(--primary)','height' => '2px','width' => '10%','margin' => '0 auto'],
                    "type" => "json",
                    "columns" => "col-12",
                    "props" => [
                        "label" => "Configuración de Línea",
                    ]
                ],
            ],
        ],
        "title" => [
          "title" => "Titulo",
          "fields" => [
              "titleClasses" => [
                  "name" => "titleClasses",
                  "type" => "input",
                  "columns" => "col-12",
                  "props" => [
                      "label" => "Clases",
                  ]
              ],
              "titleSize" => [
                  "name" => "titleSize",
                  "type" => "input",
                  "props" => [
                      "label" => "Tamaño Fuente",
                  ]
              ],
              "titleMarginT" => [
                  "name" => "titleMarginT",
                  "type" => "select",
                  "props" => [
                      "label" => "Margen superior",
                      "options" => $vAttributes["marginT"]
                  ]
              ],
              "titleMarginB" => [
                  "name" => "titleMarginB",
                  "type" => "select",
                  "props" => [
                      "label" => "Margen inferior",
                      "options" => $vAttributes["marginB"]
                  ]
              ],
              "titleTransform" => [
                  "name" => "titleTransform",
                  "type" => "select",
                  "props" => [
                      "label" => "Transformar",
                      "options" => $vAttributes["textTransform"]
                  ]
              ],
              "titleColorClass" => [
                  "name" => "titleColorClass",
                  "type" => "select",
                  "props" => [
                      "label" => "Color Class",
                      "options" => $vAttributes["textColors"]
                  ],
              ],
              "titleColor" => [
                  "name" => "titleColor",
                  "type" => "inputColor",
                  "props" => [
                      "label" => "Color",
                  ],
                  "help" => [
                      "description" => "Selecciona el color custom en Color Class para activarlo",
                  ]
              ],
              "titleWeight" => [
                  "name" => "titleWeight",
                  "type" => "select",
                  "props" => [
                      "label" => "Negrita",
                      "options" => $vAttributes["textWeight"]
                  ]
              ],
              "titleLetterSpacing" => [
                  "name" => "titleLetterSpacing",
                  "type" => "input",
                  "props" => [
                      "label" => "Espacio entre letras",
                      "type" => "number"
                  ]
              ],
              "titleShadow" => [
                  "name" => "titleShadow",
                  "type" => "input",
                  "props" => [
                      "label" => "Sombra",
                  ]
              ],
              "titleUrl" => [
                  "name" => "titleUrl",
                  "type" => "input",
                  "props" => [
                      "label" => "Url"
                  ]
              ],
              "titleTarget" => [
                  "name" => "titleTarget",
                  "type" => "select",
                  "props" => [
                      "label" => "Target",
                      "options" => $vAttributes["target"]
                  ]
              ],
          ]
        ],
        "subtitle" => [
            "title" => "Subtitulo",
            "fields" => [
                "subtitleClasses" => [
                    "name" => "subtitleClasses",
                    "type" => "input",
                    "columns" => "col-12",
                    "props" => [
                        "label" => "Clases",
                    ]
                ],
                "subtitleSize" => [
                    "name" => "subtitleSize",
                    "type" => "input",
                    "props" => [
                        "label" => "Tamaño Fuente",
                    ]
                ],
                "subtitleMarginT" => [
                    "name" => "subtitleMarginT",
                    "type" => "select",
                    "props" => [
                        "label" => "Margen superior",
                        "options" => $vAttributes["marginT"]
                    ]
                ],
                "subtitleMarginB" => [
                    "name" => "subtitleMarginB",
                    "value" => "mb-3",
                    "type" => "select",
                    "props" => [
                        "label" => "Margen inferior",
                        "options" => $vAttributes["marginB"]
                    ]
                ],
                "subtitleTransform" => [
                    "name" => "subtitleTransform",
                    "type" => "select",
                    "props" => [
                        "label" => "Transformar ",
                        "options" => $vAttributes["textTransform"]
                    ]
                ],
                "subtitleColorClass" => [
                    "name" => "subtitleColorClass",
                    "type" => "select",
                    "props" => [
                        "label" => "Color Class",
                        "options" => $vAttributes["textColors"]
                    ]
                ],
                "subtitleColor" => [
                    "name" => "subtitleColor",
                    "type" => "inputColor",
                    "props" => [
                        "label" => "Color Custom",
                    ],
                    "help" => [
                        "description" => "Selecciona el color custom en Color Class para activarlo",
                    ]
                ],
                "subtitleWeight" => [
                    "name" => "subtitleWeight",
                    "type" => "select",
                    "props" => [
                        "label" => "Negrita",
                        "options" => $vAttributes["textWeight"]
                    ]
                ],
                "subtitleLetterSpacing" => [
                    "name" => "subtitleLetterSpacing",
                    "type" => "input",
                    "props" => [
                        "label" => "Espacio entre letras",
                        "type" => "number"
                    ]
                ],
                "subtitleShadow" => [
                    "name" => "subtitleShadow",
                    "type" => "input",
                    "props" => [
                        "label" => "Sombra",
                    ]
                ],
            ]
        ],
        "Animation" => [
            "title" => "Animaciones de Entrada",
            "fields" => [
                "animateTextName" => [
                    "name" => "animateTextName",
                    "type" => "select",
                    "props" => [
                        "label" => "Animacion",
                        "options" => $vAttributes["animationAOS"]
                    ]
                ],
                "animateTextDuration" => [
                    "name" => "animateTextDuration",
                    "type" => "input",
                    "props" => [
                        "label" => "Duracion"
                    ],
                    "help" => [
                        "description" => "Valores de 0 a 3000, con paso de 50ms"
                    ]
                ],
                "animateTextOffset" => [
                    "name" => "animateTextOffset",
                    "type" => "input",
                    "props" => [
                        "label" => "Offset",
                    ],
                    "help" => [
                        "description" => "Desplazamiento (en px) desde el punto de activación original"
                    ]
                ],
                "animateTextDelay" => [
                    "name" => "animateTextDelay",
                    "type" => "input",
                    "props" => [
                        "label" => "Delay",
                    ],
                    "help" => [
                        "description" => "Valores de 0 a 3000, con paso de 50ms"
                    ]
                ],
                "animateTextEasing" => [
                    "name" => "animateTextEasing",
                    "type" => "select",
                    "props" => [
                        "label" => "Easing",
                        "options" => $vAttributes["easingAOS"]
                    ]
                ],
                "animateTextOnce" => [
                    "name" => "animateTextOnce",
                    "type" => "select",
                    "props" => [
                        "label" => "One",
                        "options" => $vAttributes["validation"]
                    ],
                    "help" => [
                        "description" => "Si la animación debe ocurrir solo una vez, mientras se desplaza hacia abajo"
                    ]
                ],
                "animateTextMirror" => [
                    "name" => "animateTextMirror",
                    "type" => "select",
                    "props" => [
                        "label" => "Mirror",
                        "options" => $vAttributes["validation"]
                    ],
                    "help" => [
                        "description" => "Si los elementos deben animarse mientras se desplazan más allá de ellos"
                    ]
                ],
            ]
        ],
    ]
  ],
];
