<?php
$hero_title = get_theme_mod('itechglobal_hero_title', 'Professional IT consulting that connects systems and drives growth.');
$hero_subtitle = get_theme_mod('itechglobal_hero_subtitle', 'Itech Global delivers EDI integration, cloud modernization, and product engineering for organizations that need stability, speed, and measurable ROI.');
$contact_email = get_theme_mod('itechglobal_contact_email', 'info@itechglobal.in');
$contact_phone = get_theme_mod('itechglobal_contact_phone', '+91 90000 00000');
$contact_address = get_theme_mod('itechglobal_contact_address', 'Hyderabad, Telangana, India');
?>
<main>
  <section id="home" class="hero">
    <div class="container hero-grid">
      <div>
        <h1><?php echo esc_html($hero_title); ?></h1>
        <p><?php echo esc_html($hero_subtitle); ?></p>
        <div class="hero-actions">
          <button class="btn btn-primary" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Start a Project</button>
          <button class="btn btn-secondary" onclick="document.getElementById('cases').scrollIntoView({behavior: 'smooth'})">View Client Results</button>
        </div>
        <div class="pill-row">
          <span class="pill">ISO-ready delivery</span>
          <span class="pill">EDI mapping experts</span>
          <span class="pill">24/7 monitoring</span>
        </div>
      </div>
      <div class="hero-card">
        <img class="logo-watermark" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/itech-mark.png" alt="">
        <h3>Engagement snapshot</h3>
        <p>Senior specialists managing discovery, integration, and go-live with clear milestones.</p>
        <div class="stat-grid">
          <div class="stat">
            <h3>4-10 wks</h3>
            <span>Typical launch window</span>
          </div>
          <div class="stat">
            <h3>30%+</h3>
            <span>Ops cost reduction</span>
          </div>
          <div class="stat">
            <h3>99.9%</h3>
            <span>Uptime target</span>
          </div>
          <div class="stat">
            <h3>50+</h3>
            <span>Successful deployments</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="trust">
    <div class="container trust-row">
      <span>Enterprise integrations</span>
      <span>EDI compliance</span>
      <span>Cloud modernization</span>
      <span>24/7 monitoring</span>
      <span>Secure delivery</span>
    </div>
  </section>

  <section id="services" class="section">
    <div class="container">
      <div class="section-title">
        <h2>Services built for scale</h2>
        <p>We align strategy, engineering, and operations to keep your systems connected and future-ready.</p>
      </div>
      <div class="card-grid">
        <article class="card reveal">
          <h3>Product &amp; Service Acceleration</h3>
          <p>High-performing, market-ready product development and acceleration.</p>
          <details class="read-more">
            <summary>Read more</summary>
            <div class="read-more-content">
              <p>We offer an extensive suite of services focused on developing high-performing, market-ready products that stand out in competitive environments. Our advanced product acceleration solutions are designed to support everything from conceptual offerings to sophisticated software innovations. With a team of seasoned professionals, we deliver efficient, reliable, and time-optimized solutions that streamline your product development journey.</p>
              <p>Our intelligent product configuration tools enable you to evaluate performance metrics, user response, market acceptance, and overall reach with precision. By leveraging our technology, you gain greater control over planning, execution, and market positioning—empowering you to shape and lead your own market space. We ensure that your research and development efforts translate into tangible results, eliminating unnecessary delays and inefficiencies.</p>
              <p>Our digital solutions are built on modern, open-source technologies and include features such as real-time collaboration, video conferencing, integrated communication tools, screen sharing, and interactive engagement options. With our advanced demonstration platform and enhanced whiteboard capabilities, your presentations and discussions become more dynamic and impactful. Host large-scale meetings with up to 200 participants, enabling comprehensive insights and collaborative decision-making from multiple perspectives.</p>
              <p>Additionally, our platform includes secure recording features, allowing administrators to revisit discussions at any time for better clarity and documentation. To ensure accessibility and convenience, our solutions are available across both Android and iOS devices, enabling seamless usage on the go.</p>
              <p>With our product accelerator technology, you can refine and optimize your offerings before they reach the market, significantly reducing trial-and-error efforts while improving the likelihood of positive customer reception. Our approach not only enhances product quality but also expands its market reach and visibility. Embrace our product acceleration program to create impactful solutions and unlock new growth opportunities in today’s dynamic marketplace.</p>
            </div>
          </details>
        </article>
        <article class="card reveal">
          <h3>IT Services &amp; Strategy</h3>
          <p>Modernize operations with secure, scalable IT consulting.</p>
          <details class="read-more">
            <summary>Read more</summary>
            <div class="read-more-content">
              <p>In today’s corporate landscape, constant change and rapidly advancing technology have become the norm—and we ensure you stay ahead of the curve. Our IT consulting services are designed to empower your organization with robust digital capabilities that transform and modernize your operations. Backed by a team of highly skilled and experienced IT professionals, we prepare your business to adapt seamlessly to next-generation technologies.</p>
              <p>Our solutions focus on minimizing manual processes while enhancing accuracy, transparency, accessibility, security, and automation. At the same time, we prioritize maximizing your return on investment by optimizing costs and driving higher profitability. With our cloud computing services, you can strike the perfect balance between expenditure and returns, benefiting from scalable platforms, flexible architecture, and improved digital performance.</p>
              <p>Our IT strategy consulting is ideal for businesses aiming to establish a strong digital presence and compete effectively on a global scale. We support organizations in their digital transformation journey by delivering customized technology solutions aligned with their goals. Through our Enterprise Resource Planning (ERP) services, we facilitate efficient change management, streamlined operations, and well-structured organizational frameworks.</p>
              <p>What sets us apart is our commitment to implementing technology in a way that aligns with your company’s culture and long-term vision. Beyond upgrading existing systems, we also encourage the development of innovative business models. Our bimodal IT approach enables both the enhancement of current operations and the successful launch of new ventures by ensuring scalability and technological readiness.</p>
              <p>If you are seeking reliable and forward-thinking IT strategy consulting, you’ve come to the right place.</p>
            </div>
          </details>
        </article>
        <article class="card reveal">
          <h3>Business Consulting</h3>
          <p>Strategic guidance to build resilient, high-performing organizations.</p>
          <details class="read-more">
            <summary>Read more</summary>
            <div class="read-more-content">
              <p>At Itech Global, we recognize that every enterprise encounters distinct challenges at various stages of its journey, and timely expert guidance can make a meaningful difference. To address this need, we offer comprehensive business consulting services tailored to support organizations of all sizes. As one of our principal service offerings, our consulting solutions are designed for both established companies and emerging start-ups alike. While mature businesses often strive to adapt to rapidly changing global market dynamics, start-ups focus on establishing their presence and gaining a competitive edge.</p>
              <p>Our team of highly skilled, knowledgeable, and experienced consultants is dedicated to helping you navigate complex business landscapes with confidence. From capital planning and resource optimization to market entry strategies and expansion initiatives, our experts provide strategic direction that drives measurable results. By engaging our consulting services, you position your organization for sustainable growth and long-term success.</p>
              <p>We continuously analyze market trends, technological advancements, and innovation patterns to deliver forward-thinking solutions aligned with your business objectives. In today’s fast-evolving and competitive environment, organizations require customized strategies—and that is precisely where our consultants add value. Much like a professional coach guides personal development, our business consultants offer clarity, perspective, and actionable insights to help you overcome challenges and seize opportunities.</p>
              <p>Beyond advisory, we empower your organization with the knowledge and tools necessary for future readiness, ensuring operational efficiency and resilience. Our expertise spans key areas such as investment planning, research and development, workforce enhancement, organizational transformation, talent acquisition, growth strategies, and business stability.</p>
              <p>If your goal is to build a high-performing, agile, and future-ready team capable of thriving in any global scenario, Itech Global’s business consulting services provide the strategic foundation you need.</p>
            </div>
          </details>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container highlight-panel">
      <div>
        <h3>Leadership visibility</h3>
        <p>Weekly executive summaries with risks, progress, and next actions.</p>
      </div>
      <div>
        <h3>Operational certainty</h3>
        <p>SLAs, monitoring, and escalation plans built into every engagement.</p>
      </div>
      <div>
        <h3>Scalable delivery</h3>
        <p>Reusable playbooks and integration frameworks to accelerate timelines.</p>
      </div>
    </div>
  </section>

  <section id="cases" class="section">
    <div class="container">
      <div class="section-title">
        <h2>Selected outcomes</h2>
        <p>Examples of measurable impact across supply chain, SaaS, and finance.</p>
      </div>
      <div class="case-grid">
        <article class="case reveal">
          <div class="case-shot"></div>
          <div class="case-body">
            <h3>Retail EDI acceleration</h3>
            <p>Reduced onboarding time by 60% using reusable trading-partner templates.</p>
          </div>
        </article>
        <article class="case reveal">
          <div class="case-shot" style="background: linear-gradient(135deg, #ffbfa3, #f2d27b, #7aa4ff);"></div>
          <div class="case-body">
            <h3>Cloud cost optimization</h3>
            <p>Cut monthly infrastructure spend by 28% while improving performance.</p>
          </div>
        </article>
        <article class="case reveal">
          <div class="case-shot" style="background: linear-gradient(135deg, #1f2937, #334155, #f97316);"></div>
          <div class="case-body">
            <h3>Product engineering sprint</h3>
            <p>Launched a new platform in 6 weeks with analytics and growth tooling.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section id="process" class="section">
    <div class="container">
      <div class="section-title">
        <h2>How we deliver</h2>
        <p>Structured delivery with shared ownership and measurable milestones.</p>
      </div>
      <div class="timeline">
        <div class="step reveal">
          <span>01</span>
          <h3>Discovery</h3>
          <p>Stakeholder interviews, process mapping, and success metrics.</p>
        </div>
        <div class="step reveal">
          <span>02</span>
          <h3>Blueprint</h3>
          <p>Architecture, integration maps, and implementation plan.</p>
        </div>
        <div class="step reveal">
          <span>03</span>
          <h3>Build</h3>
          <p>Agile delivery with weekly demos.</p>
        </div>
        <div class="step reveal">
          <span>04</span>
          <h3>Launch</h3>
          <p>Cutover planning, training, and long-term support.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="section">
    <div class="container">
      <div class="section-title">
        <h2>About Itech Global</h2>
        <p>We are a delivery-focused technology partner with deep integration expertise.</p>
      </div>
      <div class="card-grid">
        <article class="card reveal">
          <h3>Global delivery</h3>
          <p>Distributed team across India and North America with 24/7 handoffs.</p>
        </article>
        <article class="card reveal">
          <h3>Security first</h3>
          <p>Compliance-ready practices, automated testing, and incident response playbooks.</p>
        </article>
        <article class="card reveal">
          <h3>Long-term support</h3>
          <p>Dedicated success manager and maintenance packages post-launch.</p>
        </article>
      </div>
    </div>
  </section>

  <section id="faq" class="section">
    <div class="container">
      <div class="section-title">
        <h2>Questions we hear often</h2>
        <p>Clear answers so you can move fast with confidence.</p>
      </div>
      <div class="faq">
        <div class="faq-item">
          <h4>How long does a typical engagement take?</h4>
          <p>Most projects launch in 4 to 10 weeks depending on integration depth and approvals.</p>
        </div>
        <div class="faq-item">
          <h4>Can you work with our existing vendors?</h4>
          <p>Yes. We integrate with ERP, WMS, and trading partners using proven mapping frameworks.</p>
        </div>
        <div class="faq-item">
          <h4>Do you offer post-launch support?</h4>
          <p>We provide ongoing monitoring, SLAs, and enhancement sprints.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="section">
    <div class="container contact">
      <div>
        <h2>Let us design your next release</h2>
        <p>Email: <?php echo esc_html($contact_email); ?></p>
        <p>Phone: <?php echo esc_html($contact_phone); ?></p>
        <p>Address: <?php echo esc_html($contact_address); ?></p>
      </div>
      <form>
        <input type="text" id="name" name="name" placeholder="Your name" />
        <input type="email" id="email" name="email" placeholder="Work email" />
        <textarea id="message" name="message" rows="4" placeholder="Tell us about your goals"></textarea>
        <button type="submit">Send message</button>
      </form>
    </div>
  </section>
</main>
