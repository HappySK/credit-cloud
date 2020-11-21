$(document).ready(function(){
  $('#affiliate-btn-identity-iq').click(function(){
    show_affiliate_modal('Identity IQ','IdentityIQ Affiliates Receive Residual Revenue each month for every consumer enrolled in IdentityIQ. Comprehensive 3 Bureau Reports and Scores are refreshed every 30 days. Reports can upload directly into Credit Repair Cloud. IdentityIQ includes daily credit monitoring with alerts. Your consumer pays $1 / 7 Day Trial. No setup fees or startup charges. Generous affiliate payouts direct deposited into your bank account each month. Simply fill in the information below and you will be contacted within 24 hours to set up your account.')
  })

  $('#edit-btn-identity-iq').click(function(){
    show_link_modal()
  })

  $('#affiliate-btn-smart-credit').click(function(){
    show_affiliate_modal('Smart Credit','SmartCredit affiliates receive residual revenue each month for every consumer enrolled in SmartCredit. Comprehensive 3 Bureau Reports and Scores are refreshed every 30 days and can be uploaded directly into Credit Repair Cloud. Generous affiliate payouts direct deposited into your bank account each month. Simply fill in the information below and you will be contacted to set up your account.')
  })

  $('#edit-btn-smart-credit').click(function(){
    show_link_modal()
  })

  $('#affiliate-btn-my-free-score-now').click(function(){
    show_affiliate_modal('My Free Score Now','MyFreeScoreNow affiliates receive residual revenue each month for every consumer enrolled in MyFreeScoreNow. Comprehensive 3 Bureau Reports and Scores are refreshed every 30 days and can be uploaded directly into Credit Repair Cloud. Generous affiliate payouts direct deposited into your bank account each month. Simply fill in the information below and you will be contacted to set up your account.')
  })

  $('#edit-btn-my-free-score-now').click(function(){
    show_link_modal()
  })

  $('#affiliate-btn-identity-club').click(function(){
    show_affiliate_modal('Identity Club','IdentityClub affiliates receive residual revenue each month for every consumer enrolled in IdentityClub. Comprehensive 3 Bureau Reports and Scores are refreshed every 30 days and can be uploaded directly into Credit Repair Cloud. Generous affiliate payouts ACH into your bank account each month. Simply fill in the information below and you will be contacted to set up your account.')
  })

  $('#edit-btn-identity-club').click(function(){
    show_link_modal()
  })

  $('#edit-btn-privacy-gaurd').click(function(){
    show_link_modal()
  })

  $('#affiliate-btn-others').click(function(){
    show_affiliate_modal('Others')
  })

  $('#edit-btn-others').click(function(){
    show_link_modal()
  })
})

function show_affiliate_modal(name, paragraph)
{
  $('#affiliate-modal-label').text('Learn How to become an Affiliate : '+name);
  $('#affiliate-paragraph').text(paragraph);
  $('#affiliate-modal').modal('show');
}

function show_link_modal()
{
  $('#edit-link-modal').modal('show');
}