<?php
/**
 * FAQ Section — 10th fold
 */
$faqs = [
    [
        'question' => 'How does Python AI help my business within the Healthcare industry?',
        'answer'   => 'Python AI automates clinical workflows, processes patient data in real time, and surfaces actionable intelligence from EHR systems, reducing administrative burden, improving care coordination, and accelerating decisions that affect patient outcomes.',
    ],
    [
        'question' => 'How does Python AI help me achieve my business objectives within the Finance sector?',
        'answer'   => 'Python AI enables real-time fraud detection, automates risk scoring, streamlines compliance reporting, and delivers predictive analytics that give finance teams a data-driven edge across lending, trading, and customer operations.',
    ],
    [
        'question' => 'How quickly can your Python AI engineers start on my project?',
        'answer'   => 'Most clients have a dedicated engineer onboarded within 48 hours of signing the agreement. Our pre-vetted talent pool and streamlined four-step process eliminate the typical 3–6 month recruitment cycle.',
    ],
    [
        'question' => "What level of experience do Clarion's Python developers bring?",
        'answer'   => 'Our engineers have a minimum of 5 years of Python development experience and hands-on production deployments in AI/ML. Each candidate passes multi-stage technical assessments covering architecture, code quality, and domain knowledge before joining our talent pool.',
    ],
    [
        'question' => 'How do you handle compliance and audit trail requirements?',
        'answer'   => 'We build compliance into the development lifecycle — logging every model decision, maintaining audit-ready documentation, and architecting systems to meet SOC 2, HIPAA, and GDPR requirements where applicable.',
    ],
    [
        'question' => 'How is PHI and PII handled during development?',
        'answer'   => 'All PHI and PII is handled under strict data governance policies: anonymisation at source, encrypted storage and transit, access controls limited to need-to-know personnel, and contractual DPA/BAA agreements with every client.',
    ],
    [
        'question' => 'Who owns the IP and source code?',
        'answer'   => 'You do. All intellectual property, source code, models, and documentation produced during your engagement are fully assigned to your organisation upon project completion or at any agreed milestone.',
    ],
    [
        'question' => 'How do your engineers integrate with our onshore US teams?',
        'answer'   => 'Our engineers work in overlapping time zones with your team, join your daily standups, use your existing project management and communication tools, and follow your development workflows — operating as embedded team members, not external vendors.',
    ],
    [
        'question' => 'What does the PoC → Pilot → Production flow look like?',
        'answer'   => 'We start with a scoped Proof of Concept to validate feasibility, move to a Pilot with real data and stakeholder feedback, then scale to Production with CI/CD pipelines, monitoring, and SLA-backed support.',
    ],
    [
        'question' => 'How do you handle model explainability and bias in regulated AI systems?',
        'answer'   => 'We implement SHAP, LIME, and other explainability frameworks alongside bias audits at each stage of the ML pipeline, ensuring your models meet regulatory expectations and internal governance standards.',
    ],
    [
        'question' => 'What makes Clarion different from a typical Python outsourcing firm?',
        'answer'   => 'We specialise exclusively in Python AI engineering. Our vEmployee model means you get a dedicated engineer who is accountable to your outcomes — not a rotating bench resource. Every engagement is backed by transparent deliverables and a two-day onboarding SLA.',
    ],
    [
        'question' => 'Can your Python engineers work with our existing legacy codebase?',
        'answer'   => 'Yes. Our engineers are experienced in modernising legacy Python codebases, integrating AI capabilities into existing architectures, and refactoring monolithic systems to support scalable AI-driven features without full rewrites.',
    ],
];
?>
<section class="faq-section" id="faq" aria-labelledby="faq-heading">
    <div class="container">

        <h2 class="faq-heading" id="faq-heading">FAQs</h2>

        <div class="faq-list" role="list">
            <?php foreach ( $faqs as $index => $faq ) :
                $item_id  = 'faq-item-' . $index;
                $panel_id = 'faq-panel-' . $index;
                $is_open  = ( $index === 0 );
            ?>
            <div class="faq-item<?php echo $is_open ? ' faq-item--open' : ''; ?>"
                 role="listitem" id="<?php echo esc_attr( $item_id ); ?>">
                <button class="faq-question"
                        aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
                        aria-controls="<?php echo esc_attr( $panel_id ); ?>">
                    <span class="faq-question-text"><?php echo esc_html( $faq['question'] ); ?></span>
                    <span class="faq-chevron" aria-hidden="true">
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L13 1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </button>
                <div class="faq-answer"
                     id="<?php echo esc_attr( $panel_id ); ?>"
                     role="region"
                     aria-labelledby="<?php echo esc_attr( $item_id ); ?>"
                     <?php echo $is_open ? '' : 'hidden'; ?>>
                    <p><?php echo esc_html( $faq['answer'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<script>
(function () {
    var items = document.querySelectorAll('.faq-item');
    items.forEach(function (item) {
        var btn   = item.querySelector('.faq-question');
        var panel = item.querySelector('.faq-answer');
        btn.addEventListener('click', function () {
            var open = item.classList.contains('faq-item--open');
            if (open) {
                item.classList.remove('faq-item--open');
                btn.setAttribute('aria-expanded', 'false');
                panel.setAttribute('hidden', '');
            } else {
                item.classList.add('faq-item--open');
                btn.setAttribute('aria-expanded', 'true');
                panel.removeAttribute('hidden');
            }
        });
    });
})();
</script>
