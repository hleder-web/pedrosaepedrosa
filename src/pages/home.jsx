import React, { useRef } from "react";
import { Swiper, SwiperSlide } from "swiper/react";
import { Navigation, Pagination, EffectFade } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade";

const Home = () => {
  const swiperRef = useRef(null);

  const sliderImages = window.sliderImages || [];

  return (
    <>
      <Swiper
        ref={swiperRef}
        modules={[Navigation, Pagination, EffectFade]}
        slidesPerView={1}
        loop={true}
        navigation
        direction="vertical"
        pagination={{ clickable: true }}
        className="meu-swiper"
      >
        {sliderImages.map((item, index) => (
          <SwiperSlide key={index}>
            <img src={item.src} alt={`Slide ${index + 1}`} />
          </SwiperSlide>
        ))}
      </Swiper>

      <button
        className="custom-next"
        onClick={() => swiperRef.current?.swiper.slideNext()}
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
