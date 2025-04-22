import React, { useState } from "react";
import ReactMarkdown from "react-markdown";

const postsData = [
  {
    name: "Restaurante Anna",
    category: "comercial",
    description: `
Local: São Paulo  

Data do projeto: 2024  

Área: 434 m²  

Arquitetura: Bernardes Arquitetura  

Interiores: Bernardes Arquitetura  

Equipe: Thiago Bernardes, Márcia Santoro, Camila Tariki, Felipe Coimbra, Daniel Farfelmaze, Heriane Ramos, Pérola Machado, Luísa Mader, Natália Valente, Anna Carolina Lancsarics, Giovanna Custódio, Paula Rimi, Rubens Takahashi  

Paisagismo: Rodrigo Oliveira  

Iluminação: Lux Projetos  

Fotos: Pedro Kok`,
    images: [
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-1.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-2.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-3.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-4.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-5.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-6.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-7.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-8.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-9.png",
      "/wp-content/themes/pedrosaepedrosa2025/assets/restaurante-anna-10.png",
    ],
  },
  {
    name: "Joalheria Leblon",
    category: "comercial",
    description: "Informações detalhadas sobre o projeto da Joalheria Leblon.",
    images: [
      "/wp-content/themes/pedrosaepedrosa2025/assets/joalheria.png",
    ],
  },
  {
    name: "Casa Jardim Pernambuco III",
    category: "residencial",
    description: "Texto descritivo sobre a *Casa Jardim Pernambuco III*.",
    images: [
      "/wp-content/themes/pedrosaepedrosa2025/assets/casa3.png",
    ],
  },
  {
    name: "Cobertura São Conrado",
    category: "residencial",
    description: "Descrição da cobertura localizada em São Conrado.",
    images: [
      "/wp-content/themes/pedrosaepedrosa2025/assets/coberturasao.png",
    ],
  },
  {
    name: "Cobertura Leblon I",
    category: "residencial",
    description: "Detalhes da *Cobertura Leblon I*.",
    images: [
      "/wp-content/themes/pedrosaepedrosa2025/assets/coberturaleblon.png",
    ],
  },
  {
    name: "Casa Jardim Pernambuco II",
    category: "residencial",
    description: "Mais informações sobre a Casa Jardim Pernambuco II.",
    images: [
      "/wp-content/themes/pedrosaepedrosa2025/assets/casa2.png",
    ],
  },
];

const categories = [
  "residencial",
  "comercial",
  "campo + praia",
  "internacional",
  "mostras",
];

export default function PaginaFiltro() {
  const [selectedCategory, setSelectedCategory] = useState("");
  const [searchTerm, setSearchTerm] = useState("");
  const [selectedPost, setSelectedPost] = useState(null);
  const [zoomImage, setZoomImage] = useState(null);

  const filteredPosts = postsData.filter((post) => {
    const matchesCategory = selectedCategory
      ? post.category === selectedCategory
      : true;
    const matchesSearch = post.name.toLowerCase().includes(searchTerm.toLowerCase());
    return matchesCategory && matchesSearch;
  });

  const handleOverlayClick = (e) => {
    if (e.target.classList.contains("pagina-filtro__zoom-overlay")) {
      setZoomImage(null);
    }
  };

  return (
    <div className="pagina-filtro">
        <div class="sentinela" data-bg="escuro"></div>
      <div className="pagina-filtro__header">

        <div className="pagina-filtro__categories">
          {categories.map((cat) => (
            <button
              key={cat}
              onClick={() => setSelectedCategory(cat)}
              className={`pagina-filtro__button ${selectedCategory === cat ? "pagina-filtro__button--active" : ""
                }`}
            >
              {cat}
            </button>
          ))}
        </div>
        <div className="pagina-filtro__search-wrapper">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" className="pagina-filtro__search-icon">
            <path d="M7.4 13.8C10.9346 13.8 13.8 10.9346 13.8 7.4C13.8 3.86538 10.9346 1 7.4 1C3.86538 1 1 3.86538 1 7.4C1 10.9346 3.86538 13.8 7.4 13.8Z" stroke="#58585A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M17.0002 17L12.2002 12.2" stroke="#58585A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>

          <input
            type="text"
            placeholder=""
            className="pagina-filtro__search-input"
            value={searchTerm}
            onChange={(e) => setSearchTerm(e.target.value)}
          />
        </div>

      </div>

      {selectedPost ? (
        <div className="pagina-filtro__post container">
     
          <div className="pagina-filtro__post-description">
          <button onClick={() => setSelectedPost(null)} className="pagina-filtro__back-button">
                    <svg width="30" height="16" viewBox="0 0 30 16" fill="#000" xmlns="http://www.w3.org/2000/svg" ><path d="M1 1L15 15L29 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
 Voltar
          </button>
          <h2 className="pagina-filtro__post-title">{selectedPost.name}</h2>
            <ReactMarkdown>{selectedPost.description}</ReactMarkdown>
          </div>
          <div className="pagina-filtro__post-gallery">
            {selectedPost.images.map((img, index) => (
              <img
                key={index}
                src={img}
                alt={`Imagem ${index + 1}`}
                className={`pagina-filtro__post-image pagina-filtro__post-gallery-image--${index + 1}`}
                onClick={() => setZoomImage(img)}
              />
            ))}
          </div>
        </div>
        
      ) : (
      <>


        <div className="pagina-filtro__grid">

          {filteredPosts.map((post) => (
            <div
              key={post.name}
              className="pagina-filtro__card"
              onClick={() => setSelectedPost(post)}
            >
              <img src={post.images[0]} alt={post.name} className="pagina-filtro__card-image" />
              <div className="pagina-filtro__card-body">
                <h3 className="pagina-filtro__card-title">{post.name}</h3>
              </div>
            </div>
          ))}
        </div>
      </>
        
      )}

      {zoomImage && (
        <div className="pagina-filtro__zoom-overlay" onClick={handleOverlayClick}>
          <div className="pagina-filtro__zoom-container">
            <button className="pagina-filtro__zoom-close" onClick={() => setZoomImage(null)}>
              ×
            </button>
            <img src={zoomImage} alt="Zoom" className="pagina-filtro__zoom-image" />
          </div>
        </div>
      )}
    </div>
  );
}
