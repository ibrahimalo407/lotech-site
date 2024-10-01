document.addEventListener("DOMContentLoaded", () => {
    gsap.from(".hero h1", { duration: 1, y: -100, opacity: 0, ease: "bounce" });
    gsap.from(".hero p", { duration: 1, y: 50, opacity: 0, delay: 0.5 });
    gsap.from(".hero a", { duration: 1, scale: 0, opacity: 0, delay: 1 });
    
    gsap.from(".service-card", {
        scrollTrigger: {
            trigger: ".service-card",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
        duration: 1,
        y: 100,
        opacity: 0,
        stagger: 0.2
    });
});
