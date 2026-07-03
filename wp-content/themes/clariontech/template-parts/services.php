<?php
/**
 * Services Section Template Part
 */

$services = [
    [
        'icon'  => '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6L12 2z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M12 2l1.2 3.7M12 2l-1.2 3.7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>',
        'title' => 'AI Consulting &amp; Advisory',
        'body'  => '<p>Drive Python AI initiatives with the right decisions early, setting a clear path to impact before development even begins.</p><p>Our certified Python professionals map your AI roadmap, define implementation priorities, &amp; apply proven agile practices, so every architectural decision is made with your business outcomes in mind.</p>',
    ],
    [
        'icon'  => '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="3" y="3" width="8" height="8" rx="1.5" stroke="currentColor" stroke-width="1.8"/><rect x="13" y="3" width="8" height="4" rx="1.5" stroke="currentColor" stroke-width="1.8"/><rect x="13" y="10" width="8" height="11" rx="1.5" stroke="currentColor" stroke-width="1.8"/><rect x="3" y="13" width="8" height="8" rx="1.5" stroke="currentColor" stroke-width="1.8"/></svg>',
        'title' => 'Custom AI Solution Development',
        'body'  => '<p>We build high-performance Python AI software around your business goals and production requirements.</p><p>Our teams cover everything from initial scoping and architecture to deployment and long-term performance optimization.</p>',
    ],
    [
        'icon'  => '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8 12h8M12 8v8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M3 9V6a3 3 0 013-3h3M3 15v3a3 3 0 003 3h3M21 9V6a3 3 0 00-3-3h-3M21 15v3a3 3 0 01-3 3h-3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>',
        'title' => 'GenAI Software &amp; App Development',
        'body'  => '<p>From concept to production, custom GenAI applications are built using private and open-source GPT models, designed around your specific use case and deployed at scale.</p><p>Our Python engineers ensure your GenAI initiative delivers measurable business impact.</p>',
    ],
    [
        'icon'  => '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="9" y="2" width="6" height="4" rx="1" stroke="currentColor" stroke-width="1.8"/><rect x="2" y="18" width="6" height="4" rx="1" stroke="currentColor" stroke-width="1.8"/><rect x="9" y="18" width="6" height="4" rx="1" stroke="currentColor" stroke-width="1.8"/><rect x="16" y="18" width="6" height="4" rx="1" stroke="currentColor" stroke-width="1.8"/><path d="M12 6v5M5 18v-3a2 2 0 012-2h10a2 2 0 012 2v3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>',
        'title' => 'Intelligent Automation with Agentic AI',
        'body'  => '<p>Critical workflows like approvals, data analysis, and customer interactions don&rsquo;t need manual intervention at every step.</p><p>Our Python-powered AI agents automate those processes end-to-end, reducing overhead and freeing your teams for decisions that matter.</p>',
    ],
    [
        'icon'  => '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M21 12c0 4.418-4.03 8-9 8a9.9 9.9 0 01-4-.835L3 21l1.59-4.5A7.7 7.7 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M12 9l.8 2.4 2.2.8-2.2.8-.8 2.4-.8-2.4-2.2-.8 2.2-.8L12 9z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/></svg>',
        'title' => 'Virtual Assistant &amp; Chatbot Development',
        'body'  => '<p>Your customers expect a seamless experience, not something that will break on edge cases.</p><p>Our Python-based chatbots and voice assistants are built around your customer engagement goals, from conversational design through to deployment.</p>',
    ],
];
?>

<section class="services-section" id="services">
    <div class="container">

        <div class="services-header">
            <h2 class="services-headline">
                Python AI development services <span class="highlight">built for production</span>
            </h2>
            <p class="services-desc">Our Python AI capabilities power solutions that work for your industry of choice in real world scenarios.</p>
            <p class="services-desc">From enterprise data pipelines to AI-powered platforms, we architect systems that run at scale and deliver measurable business outcomes.</p>
        </div>

        <div class="services-scroll-wrap">
            <div class="services-cards" id="services-cards">
                <?php foreach ( $services as $service ) : ?>
                <div class="service-card">
                    <div class="service-icon"><?php echo $service['icon']; ?></div>
                    <h3 class="service-title"><?php echo $service['title']; ?></h3>
                    <div class="service-body"><?php echo $service['body']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="services-progress-wrap">
            <div class="services-progress-track">
                <div class="services-progress-bar" id="services-progress-bar"></div>
            </div>
        </div>

    </div>
</section>
