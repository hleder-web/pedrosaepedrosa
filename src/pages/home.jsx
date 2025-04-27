import React, { useRef } from "react";
import { Swiper, SwiperSlide } from "swiper/react";
import { Navigation, Pagination, EffectFade } from "swiper/modules"; // Importa os módulos extras
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade";

const Home = () => {
  const swiperRef = useRef(null); // Criar referência para o Swiper

  return (
    <>
      <Swiper
        ref={swiperRef} // Define a referência no Swiper
        modules={[Navigation, Pagination, EffectFade]}
        slidesPerView={1}
        loop={true}
        navigation
        direction="vertical"
        pagination={{ clickable: true }}
        className="meu-swiper"
      >
        <SwiperSlide>
          <img
            src="http://pedrosaepedrosa.com/wp-content/themes/pedrosaepedrosa2025/assets/1.png"
            alt="Natureza"
          />
        </SwiperSlide>
        <SwiperSlide>
          <img
            src="http://pedrosaepedrosa.com/wp-content/themes/pedrosaepedrosa2025/assets/2.png"
            alt="Cidade"
          />
        </SwiperSlide>
        <SwiperSlide>
          <img
            src="http://pedrosaepedrosa.com/wp-content/themes/pedrosaepedrosa2025/assets/3.png"
            alt="Tecnologia"
          />
        </SwiperSlide>
        <SwiperSlide>
          <img
            src="http://pedrosaepedrosa.com/wp-content/themes/pedrosaepedrosa2025/assets/4.png"
            alt="Tecnologia"
          />
        </SwiperSlide>
        <SwiperSlide>
          <img
            src="http://pedrosaepedrosa.com/wp-content/themes/pedrosaepedrosa2025/assets/5.png"
            alt="Tecnologia"
          />
        </SwiperSlide>
      </Swiper>

      {/* Botão personalizado para "Próximo Slide" */}
      <button
        className="custom-next"
        onClick={() => swiperRef.current?.swiper.slideNext()} // Corrige a chamada do método
      >
        <svg
          width="30"
          height="16"
          viewBox="0 0 30 16"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M1 1L15 15L29 1"
            stroke="white"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
          />
        </svg>
      </button>
    </>
  );
};

export default Home;
